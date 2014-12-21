var Tweet = function tweet() {

};

Tweet.prototype.getJSON = function () {

  this.ago = "5 months ago" + this.id;
  this.retweets = Math.floor(Math.random() * 300);

  return JSON.stringify(this);

};

module.exports = Tweet;