// Require Express to run server and routes
const express = require('express')

// Dependencies
const bodyParser = require('body-parser')
const cors = require('cors')

// Require Path as a global object for app directories
const path = require('path')

// Start up an instance of app
const app = express()

/* Middleware*/
//Here we are configuring express to use body-parser as middle-ware.
app.use(bodyParser.urlencoded({ extended: false }))
app.use(bodyParser.json())

// Cors for cross origin allowance
app.use(cors())

// Initialize the main project folder
app.use(express.static('dist'))

// View Engine Setup
app.set('views', path.join(__dirname, 'views'))
app.set('view engine', 'ejs')

// Rendering index pages
app.get('/', function(req, res) {
    res.render('index.ejs', {
        layouts: {
            header: 'layouts/header',
            main: 'layouts/main',
            footer: 'layouts/footer'
        },
        partials: {
            about: 'partials/about',
            skills: 'partials/skills',
            hire: 'partials/hire',
            service: 'partials/service',
            portfolio: 'partials/portfolio',
            client_says: 'partials/client-says',
            process: 'partials/process',
            statistics: 'partials/statistics',
            contact: 'partials/contact'
        }
    })
})

// Setup Server
const port = 8080

const server = app.listen(port, listening)

function listening() {
    if (error) throw error
    console.log(`server is running on localhost:${port}`)
}