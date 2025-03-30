require("dotenv").config();
const WebSocket = require("ws");
const fs = require("fs");
const path = require("path");

const PORT = 35729;
const WATCH_PATHS = ["app"];
const ENV = process.env.CI_ENVIRONMENT || "production";

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

function watchFileChanges(filePath) {
  fs.watch(filePath, { recursive: true }, (eventType, filename) => {
    if (!filename) return;

    const fileExt = path.extname(filename);
    if ([".php", ".css"].includes(fileExt)) {
      console.log(`File changed: ${filename}, reloading...`);

      wss.clients.forEach((client) => {
        if (client.readyState === WebSocket.OPEN) {
          client.send("reload");
        }
      });
    }
  });
}

WATCH_PATHS.forEach(watchFileChanges);

process.on("SIGINT", () => {
  console.log("Shutting down LiveReload...");
  wss.close(() => process.exit(0));
});
