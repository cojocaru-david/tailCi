require("dotenv").config();
const WebSocket = require("ws");
const fs = require("fs");
const path = require("path");
const terser = require("terser");

const PORT = 35729;
const ENV = process.env.CI_ENVIRONMENT || "production";
const INPUT_JS_PATH = path.join(__dirname, "app/Assets/input.js");
const OUTPUT_JS_PATH = path.join(__dirname, "public/assets/js/output.js");

if (ENV !== "development") {
  console.log("Live Reload is disabled in production mode.");
  process.exit(0);
}

const wss = new WebSocket.Server({ port: PORT });
console.log(`LiveReload WebSocket running on ws://localhost:${PORT}`);

wss.on("connection", (ws) => {
  console.log("Client connected to LiveReload.");
  ws.on("close", () => console.log("Client disconnected."));
  ws.on("error", (err) => console.error("WebSocket error:", err));
});

function minifyAndMoveJs() {
  fs.readFile(INPUT_JS_PATH, "utf-8", (err, data) => {
    if (err) {
      console.error("Error reading input.js:", err);
      return;
    }

    terser
      .minify(data)
      .then((result) => {
        if (result.error) {
          console.error("Error minifying JS:", result.error);
          return;
        }

        fs.mkdir(path.dirname(OUTPUT_JS_PATH), { recursive: true }, (err) => {
          if (err) {
            console.error("Error creating output directory:", err);
            return;
          }

          fs.writeFile(OUTPUT_JS_PATH, result.code, (err) => {
            if (err) {
              console.error("Error writing output.js:", err);
              return;
            }

            console.log("JavaScript minified and written to output.js");
            wss.clients.forEach((client) => {
              if (client.readyState === WebSocket.OPEN) {
                client.send("reload");
              }
            });
          });
        });
      })
      .catch((err) => console.error("Error during minification:", err));
  });
}

fs.watch(INPUT_JS_PATH, (eventType, filename) => {
  console.log(`File changed: ${INPUT_JS_PATH}, compiling and minifying...`);
  minifyAndMoveJs();
});

process.on("SIGINT", () => {
  console.log("Shutting down LiveReload...");
  wss.close(() => process.exit(0));
});
