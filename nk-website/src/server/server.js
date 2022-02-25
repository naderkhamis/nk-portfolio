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
    res.render('index.html', {
        layouts: {
            header: 'layouts/header.html',
            main: 'layouts/main.html',
            footer: 'layouts/footer.html'
        },
        partials: {
            about: 'partials/about.html',
            skills: 'partials/skills.html',
            hire: 'partials/hire.html',
            service: 'partials/service.html',
            portfolio: 'partials/portfolio.html',
            client_says: 'partials/client-says.html',
            process: 'partials/process.html',
            statistics: 'partials/statistics.html',
            contact: 'partials/contact.html'
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