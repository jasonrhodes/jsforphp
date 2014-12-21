var express = require("express");
var app = express();

var fs = require("fs");

app.get("/", function (req, res) {

  res.send("Hello from JS");

});

app.listen(3000);