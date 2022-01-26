## Deployment

# Download Repo
run `npm install` and `composer update` to install dependencies

run `npm run prod` to generate public resources

## Configuration

A few files have to be configured for this app to run correctly, there are:

`webpack.mix.js` > Replace mix.setResourceRoot contents with your project public directory path

`resources/js/app.js` > Replace baseUri with your project public directory path

## Info

A list of valid username and password combinations can be found in `storage/app/users.json`