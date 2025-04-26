import express from "express";
import { dirname } from "node:path";
import { fileURLToPath } from "node:url";

// Om lokaal pad te benaderen.
const __dirname = dirname(fileURLToPath(import.meta.url));

// Parameters tbv server
const app = express();
const port = process.env.PORT || 3000;

// Middleware for parsing URL-encoded data
app.use(express.json());
app.use(express.urlencoded({ extended: true }));

// ============ ROUTES ============
// ------------  WEB -----------
app.get("/", (req,res) => {

});

// ------------ API ------------
app.get("/", (req,res) => {
   
});

// ============ SERVER ============
app.listen(port, () => {
   console.log("Server listening @ " + port);
});