
# Bootstrap [https://www.w3schools.com/bootstrap/](https://www.w3schools.com/bootstrap/)

## Basics

- Bootstrap's global default font-size is 14px, with a line-height of 1.428.
- all `p` elements have bottom margin of 10px by default

- `.table` will give basic table layout
- `.table-striped` will give color to alternative rows

- images have classes for rounded corners `.img-rounded`
- images have classes for circle `.img-circle`
- images have classes for thumbnail `.img-thumbnail`
- images have classes for responsive `.img-responsive`
- `embed-responsive-16by9` for 16:9 ratio

- `Jumbotron` al large box after the menu
- place  jumbotron inside the `.container` class to keep it way form screen edge

- `.page-header` places a bottom-border with some space

- `.well` creates a round corner
- `.well-sm` `.well-lg`

- `.alert` show indication message
- `.alert-success`, `.alert-danger`,..
- `.alert-link` class should be used inside the alter element
- `.alert-dismissable` to show close icon
- `.fade` and `.in` to fade in the close element

- `.btn`
- button style
    - .btn
    - .btn-default
    - .btn-primary
    - .btn-success
    - .btn-info
    - .btn-warning
    - .btn-danger
    - .btn-link

- `.btn-lg`, `.btn-md`, `.btn-sm`, `.btn-xs`

- Glyficon `.glyficon-{name}`

- `.badge` class is used to show small circle icons
- use this class in `span` element

- `.label` class is same as button class
- it has same style `.label-default`,..

- `.pagination` to `ul` element, `li` child elements

- `.pager` class to show prev and next buttons
- apply to `ul` elements
- to align then left and right add class `.previous` and `.next` to child `li` elements

- `.list-group` to list elements
- apply to `ul` element

- `.panel` is bordered box with padding around it
- it has a child element with class `.panel-body`
- also has heading element with class `.panel-header`

- `.dropdown` class uses html to generate dropdown

- `.collapse` hides and show the content
- uses `data-toggle="collapse"` with target element id `data-target="#demo"`

- tabs/pills see reference

- navigation is used with `nav` element with `.navbar` and `.navbar-default`
- see reference

- all `input`, `textarea` and `select` with class `.form-control` will have 100% width
- element and labels need to be in `.form-group` element to equal spacing
- if you need to show label in element box then we need add `.sr-only` to label element

- `.media` class to show images and content with them

- Carousel see reference
- Modal see reference
- Tooltip see reference
- Popover (popup tooltip)see reference
- Scrollspy to change menu with scroll
- Affix fix menu/nav with scroll

## Grids
- 12 column gid system
    - xs (for phones)
    - sm (for tablets)
    - md (for desktops)
    - lg (for larger desktops)

- Rules
    - rows should be in `.container` or `.container-fluid` class
    - use `rows` to create horizontal groups of `columns`
    - content should placed in `columns` and `columns` should be immediate child of rows
    - Columns create gutters (gaps between column content) via padding. That padding is offset in rows for the first and last column via negative margin on `.rows`


-----------------------------------------------------------------------------
-----------------------------------------------------------------------------
-----------------------------------------------------------------------------


# HTML5

## New Elements
- new semantic elements like `header`, `footer`, `article` and `sections`
- new attributes in form elements `number`, `date`, `time`, `calender`, `range`
- new graphic elements `svg`, `canvas`
- new media elements `audio` and `video`



## Html5 API interface
- geolocation
- drag and drop
- local storage (a power full replacement for cookies)
- application cache
- web workers
- sse

## Replaced elements
- applet with object
- big with css
- center with css
- font with css

- all new semantic elements are block-level elements
- so we can tell old browser that these elements are block types
- use `HTML5Shiv` to support old IE browsers

```html
<article>	    Defines an article in a document
<aside>	        Defines content aside from the page content
<details>	    Defines additional details that the user can view or hide
<dialog>	    Defines a dialog box or window
<figcaption>	Defines a caption for a <figure> element
<figure>	    Defines self-contained content
<footer>	    Defines a footer for a document or section
<header>	    Defines a header for a document or section
<main>	        Defines the main content of a document
<mark>	        Defines marked/highlighted text
<menuitem> 	    Defines a command/menu item that the user can invoke from a popup menu
<nav>	        Defines navigation links
<progress>	    Represents the progress of a task
<section>	    Defines a section in a document
<summary>	    Defines a visible heading for a <details> element
<time>	        Defines a date/time
<wbr>	        Defines a possible line-break
```

## Attribute syntax
- Empty	            <input type="text" value="John" disabled>
- Unquoted	        <input type="text" value=John>
- Double-quoted	    <input type="text" value="John Doe">
- Single-quoted	    <input type="text" value='John Doe'>

## Semantic Elements
- Clearly describes its meaning both the browser and developer
- `section` is grouping for a section with some heading, block of related elements
- `article` is independent, self-contained content usually consist of a blog post, new article
- `header` is the header of the container, even if it is body or article
- same for `footer`
- `figure` is to group `img` and `figcaption` together
- `figcaption` is used for heading for figure

- Adding `alt` attribute to image is basically standard
- no tabs, 2 space indentation
- `lang` attribute in html element


-----------------------------------------------------------------------------
-----------------------------------------------------------------------------
-----------------------------------------------------------------------------


# Sitepoint - Jump Start HTML5

## Semantic
- `sections` can be used instead of div, but when `lang="fr"` attribute is used then section is preferred.
- `main` should define main part of the site, does not include `header` and `footer`

# HTML5 - API

### Navigator.onLine
- `navigator.onLine` to check if the the webpage is connected to the network/internet.
- chrome and opera 15+ the online event is fired on `window object`, but in rest of the browser it is fired in `document object`
- however the event will `bubble up` to window object so we can use window object
- function expression `window.ononline = function(){}` or add a listener `window.addEventListener('offline', offlineHandler)`
- `navigator.onLine` is predictable as different browser reacts differently
- we can use `XMLHttpRequest` to ping server to see if we are connected

### Application Cache
- the syntax is cache manifest file will have heading `CACHE MANIFEST` and the 4 section headers, `CACHE`, `NETWORK`, `FALLBACK` and `SETTINGS`
- `cache` will be save for all `https` or `http` domain, so http://www.google.com and http://sitepoint.com will share cache but not with `https`
- `Network` will which resource will use internet, `*` is used to fetch any resource form the internet
- `fallback` tell which page to show when user is offline
- `settings` has 2 setting `fast`, which is by default, gets from local settings and `prefer-online` which is gets files from the network
- finally, we can add the file to html like `<html manifest="todolist.appcache">`
- we need to add this on every page which need to be available offline
- we can also validate the syntax from `Cache Manifest Validator`
- then we need to add it to header as well `Content-type: text/cache-manifest`

### 2 Main Problems
- uncached assets do not load on cached page, even while online.
- updating assets will not update the cache

### Solving one
- we can use `network` section with `*` so that it can download all uncached files

### Solving two
- when all assets are updates, we need to tell the client cache to update itself
- it can be done by adding timestamp, changing asset name, add comment
- when browser sees the updated cache it will download the assets
- `location.re-load()` can be used inside an updateready event handler to force refresh

### Solving three
- another problem, if any resource fails everything fails
- we can just alter the user if an error occurs

### test application cache support
- `var hasAppCache = window.applicationCache === undefined;`


-----------------------------------------------------------------------------


# Web Storage
- `localStorage` - is available after the browser closes
- `sessionStorage` - is delete when browser closes
- advantages
    - http request performance
    - cross browser scripting attacks
    - data storage capacity

### cookies disadvantage
- limited date storage about 200kb size per cookie, 50 cookies per domain, web storage has about 2mb to 5mb
- cookies are same for subdomains, but web storage is not

### Testing Web storage support
- `typeof window.localStorage == 'undefined'`, with window object, same for `sessionStorage`

#### Web storage methods
- `localStorage.setItem("name", "amir")` or `localStorage['name'] = "amir"` or `localStorage.name = "amir"`
- `localStorage.getItem("name")` or `localStorage.name`, will return null if not exist
- storage stores values in string so object needs to be saved in string
- printing key and value of storage
```js
var i = localStorage.length, key;
while( i-- ){ /* As long as i isn't 0, this is true */
key = localStorage.key(i);
console.log( key );
console.log(localStorage.getItem(key))
}
```

- `localStorage.clear()` to clear local storage

#### Storage Event
- add listener storage event with `window.addEventListener('storage', handler)`, `function handler(event){}`
- this `event` object has values `key`, `oldValue`, `newValue`, `url` and `storageArea`.
- except `IE` all browsers fire event across tabs when using same storage
- `IE` will fire event in every window for every storage, which is a problem

#### Determining which method is called
- when `localStorage.clear` is invoked then `oldValue` and `newValue` both are null
- if `removeItem` was the trigger the `oldValue` will have the remove value and `newValue` will be null
- if `setItem` is triggered the `newValue` will not be null

#### Array and Strings
- array/object convert to string
- `JSON.stringify()` and `JSON.parse()` is used

#### Limitations of Web Storage
- limitations: `performance` and `capacity`.
- it is sync operation, so all everything will be stops when it runs
- there is size limit too, depending on the broswer
- we can add handler to `window.onerror` to catch it


-----------------------------------------------------------------------------

# Storing Data With Client-side Databases

## Dbs support in different browser
- `indexDB` and `web sql` in `chrome` and `opera`
- `IndexDB` in `firefox` and `ie 10+`
- `web sql` in `safari`
- `punchDB` has api for both `indexdb` and `websql`


## IndexDB
- is a schema-less, transactional, key-value store database
- it is no-sql db same as mongodb
- Transactional,  if any part of the read or write operation fails, the database will roll back to the previous state.
- it has 2 api's. async and sync

### Sync
- it will return the the operation is completed
- can only be used with `web worker`
- It will not block the rest of the application
- AS OF NOT THERE IS NO SUPPORT FOR SYNC IN ANY BROWSER

### Async
- it will get result without blocking

### DB
- `indexedDB.open('dbname',1);` method with 2 arguments, db name and db version
- the db is origin, hostname and port number specific, so [http://exp.com] is not equal to [http://api.exp.com]
- version number should be integer not float, and it is optional
- indexedDB wrapper [https://github.com/dfahlander/Dexie.js]


-----------------------------------------------------------------------------


# Html API's

## Web worker
- is called on different thread
- run script in the background, which run parallel to main thread
- also implement long polling

## Geolocation
- find position, even if the subject is on the move
- gets grographical position with javascript

## Server sent event api
- server can push new updates to the webpage
- lets user receive push notification from server

## Websocket
- a bidirectional communication, eg. chat
- low-latency, full-duplex single-socket connection between client and server

## Cross-document messaging
- allow documents to communicate from different domain

### Checking compatibility if apis in browser
- use `Modernizr` but should be in header


-----------------------------------------------------------------------------


# APIs: Web Workers
- web-worker script path must have the same origin as the parent script, or else it will not work
- empty `js` file can be created, which have a `self.addEventListener` method
- we can add `addEventListener` to worker object to listen back the response
- `addEventListener` will have fist argument as string, next callback function
- worker run in sandbox environment, so we cannot access `window` object
- we can listen to errors with `addEventListener` method
- once the worker is finished it should be terminated or closed

## Types
- dedicated, which is supported by all browsers
- shared, which i not supported by IE and firefox



## Advantages
- read only access to `navigator` and `location` objects
- function such as `setTimeout`, `setInterval` and `XMLHttpRequest` are accessable
- create and start subworkers
- import other scripts `importScripts()`
- can access `AppCache`

## Cons
- no access to `window`, `document` object
- no access to `DOM`

## Blob
- can we used to create on-fly web-worker
```
var blob = new Blob(["onmessage = function(e) { self.postMessage(e.data); };"]);
var worker = new Worker(window.URL.createObjectURL(blob));
```

- once the blob is used it should be released
`window.URL.revokeObjectURL(blobURI);`

## External scripts
- external scripts can be imported

## Security
- should be on same domain
- even ssl is not allowed

## Examples
- to update content
- pre-fetching and caching content
- long running loops in background
- a spell-checker that runs continuously at background


-----------------------------------------------------------------------------

# Geolocation API
- Detect your position and plot it on a Google Map.
- Continuously monitor your own position and plot them on the map.
- Detect the position of a user and show them theaters nearby.
- Let your users check in at different places and plot these on a map to later show them the places they visited that day.



-----------------------------------------------------------------------------

# Server Sent Events
- sited for one direction only, from server to browser
- the data send from server `Content-Type` should be `text/event-stream`
- control timeout with custom value
- the connection is open continuously because it will try to reconnect
- data send should start with data, eg `data:$result\n\n`, `\n\n` are important
- to increase reconnection we can add `retry:$seconds\n` to data `echo "retry: 10000\ndata:$result\n\n";`
- use `.close()` method to close the server sent event to stop working


## Note
- [https://www.html5rocks.com/en/tutorials/eventsource/basics/]


## NOTE
`As we are looping continuously in the PHP script, the execution time of the script
may exceed PHP’s max_execution_time. You may also face problems because
of the Apache user connection limit. Technologies such as Node.js may be a better
choice for these types of real-time apps.`

## Examples
- Creating a page that has a clock updated from the server side.
- Reading and displaying the latest tweets with the help of the Twitter API.
- Fetching a random photo with the Flickr API and updating the page.

-----------------------------------------------------------------------------

# Websocket API
- special connection between client and server
- server should be websocket-enabled server
- websocket allows cross-origin communication
- websocket url start with `ws://`
- `socket.readyState` can be 3 status, 0 => connecting, 1 => opened, 2 => closed


## Creating websocket server
- PHP: Ratchet [http://socketo.me/]
- Node.js: Socket.IO [https://github.com/learnboost/socket.io]

## Examples
- creating a simple online chat application
- updating a page as new updates are available on the server and communicating back
- creating an HTML5 game with multiple users.

-----------------------------------------------------------------------------

# Cross document Messaging
- Documents which are add to page, but are not allow to manipulate them
- mostly used in `iframe` and used to show adds
- Data received `data` with message body, `origin` whole url with port, `source` to send sender a response
- `targetWindow.postMessage(message, targetOrigin)` to send message
- on different page we can use `event.source.postMessage()` to send message back


-----------------------------------------------------------------------------

# CSS3
- Css3 is broken down into modules
    - Selectors
    - Box Model
    - Backgrounds and Borders
    - Image Values and Replaced Content
    - Text Effects
    - 2D/3D Transformations
    - Animations
    - Multiple Column Layout
    - User Interface
- these modules can work independently
- new selectors
    - `ele[foo^="bar"]` match from the beginning
    - `ele[foo$="bar"]` match from the end
    - `ele[foo*="bar"]` match element which contains this text
- new pseudo classes
- new styling
    - border-radius
    - border-shadow
- new background property
    - `background-clip`, clip the background
    - `background-origin`, where should be placed in padding box, border box, content box
    - `background-size`, show the size of the bg image
- css border style, can also be an image
- column properties
- column gaps and rules


## Round corners
- `border-radius` is short of `border-{top,bottom,}-{left, right}-radius`
- values can be four
    - four values: first value is `top-left`, second is `top-right`, third is `bottom-right`, forth is `bottom-left`
    - three values: first value is `top-left`, second is `top-right` and `bottom-left`, third is `bottom-right`
    - two values: first value is `top-left` and `bottom-right`, second is `top-right` and `bottom-left`
    - one value: all four corners


## Border image
- image to be used as borders
- the property has 3 parts
    - the image which will be used as border
    - where to slice it (value an be `percentage` or `value` and it can totally change the look of border)
    - define weather the middle part should be stretched or repeated

Note: `border-image` property is actually a shorthand property for the `border-image-source`, `border-image-slice`, `border-image-width`, `border-image-outset` and `border-image-repeat`


## Background image
- `background-image`: support multiple images
- `background-position`: multiple positions
- `background-repeat`: multiple repeat values
- `background` we can add all the properties in one line
- `background-size` can have values in width, height or can have 2 keywords, `contain` or `cover`
    - `contain`: will stretch to max inside the container, retaining original aspect ratio
    - `cover`: wil stretch to max, even going outside the container to match both `width` and `height`
- `background-origin`: specifies the background image position
    - `border-box`: position start from top left corner of the border
    - `padding-box`: start from top left corner of padding
    - `content-box`: start from top left corner of content
- `background-clip`: defines the painted area of the background
    - `border-box`: position start from top left corner of the border
    - `padding-box`: start from top left corner of padding
    - `content-box`: start from top left corner of content


## Background-color
- they deal with 4 types of properites
    - `RGBA colors`: red, green, blue, alpha
    - `HSL colors`: hue, saturation, light
    - `HSLA colors`: hue, saturation, light, alpha
    - `opacity`


## Gradients
- show smooth transition between 2 or more colors
- there are 2 main types
    - `linear`: down, up, left, right, diagonal
    - `radial`: from center
- `background: linear-gradient(direction, color-stop1, color-stop2, ...)`: direction to start from
- `background: linear-gradient(angle, color-stop1, color-stop2);`: angle to start from
- color can also be with opacity
- `background: radial-gradient(shape, start-color, ..., last-color);`: `shape`
- `repeating-radial-gradient` can be used to repeat the radial gradient


## Shadow Effects
- adding shadow to element and there are 2 properties
    - `text-shadow`
    - `box-shadow`
- `text-shadow` has 4 values horizontal, vertical, blur and color
- `text-shadow` support multiple shadows
- `box-shadow` is same as `text-shadow`


## Text
- `text-overflow`: show/hide text to overflow the container
- `word-wrap`: same as ide, it can also `break-word`
- `word-break`: specifies the line breaking rule


## Fonts
- there are different font types, but not all of them are supported by all browsers
- TrueType Fonts (TTF)/OpenType Fonts (OTF) and The Web Open Font Format (WOFF) are supported by all browsers
- TrueType Fonts (TTF)
    - TrueType is a font standard developed in the late 1980s, by Apple and Microsoft. TrueType is the most common font format for both the Mac OS and Microsoft Windows operating systems.
- OpenType Fonts (OTF)
    - OpenType is a format for scalable computer fonts. It was built on TrueType, and is a registered trademark of Microsoft. OpenType fonts are used commonly today on the major computer platforms.
- The Web Open Font Format (WOFF)
    - WOFF is a font format for use in web pages. It was developed in 2009, and is now a W3C Recommendation. WOFF is essentially OpenType or TrueType with compression and additional metadata. The goal is to support font distribution from a server to a client over a network with bandwidth constraints
- `font-family`: to select font name
- `url`: url to font file


## Transforms
- `TRANSFORMS THE ELEMENT IN 2D OR 3D SPACE`

### 2D Transforms
- `translate()` method moves an element from its current position to X-axis and the Y-axis.
- `rotate()` method rotates an element clockwise or counter-clockwise
- `scale()` method increases or decreases the size of an element, according to height and width
- `skewX()` method skews an element along the X-axis by the given angle.
- `skewY()` method skews an element along the Y-axis by the given angle.
- `skew()` method skews an element along the X and Y-axis by the given angles.
- `matrix()` method combines all the 2D transform methods into one.


## Transitions
- `IT DEALS WITH A START STATE AND END STATE`
- `Transition is add to main class and another style is added to :hover and when hover transition will work`
- transitions allow you to change property value smoothly from one state to another
- transition is specified by 2 thing
    - css property
    - time duration (if time is not provided default value is 0)
- it can have multiple values, coma separated
- `transition-delay`: delay the starting up time in sec
- `transformation` can also be used in `transition`


## Animations
- `GIVES MORE CONTROL TO CHANGE ONE STATE TO ANOTHER`
- it uses keyframes for animation
- keyframes have styles the element will have for certain time
- `@keyframe` is a class which defines `from` and and `to` classes
- each of them have styles
- this `@keyframe` is attached to an element with `animation-name` and `animation-duration` properties
- percentage can also be used in case of `from` and `to`
- `0% {}`, `50% {}`, `100% {}`
- `animation-delay` to delay the animation
- `animation-iteration-count` loop count
- `animation-direction` which direction
- `animation-timing-function` defines the speed of the animation


## Image
- `border-radius` can be used with images
- `max-width: 100%; height:auto` will make the image responsive
- `display: block; margin: auto;` to make the image middle
- Image overlay examples

## Button
- use transition to change background color
- button animation


## Pagination
- different pagination examples
- and breadcrumb examples


## Columns
- `column-count` will break the block of text into number of columns
- `column-gap` gaps in columns
- `column-rule-style` line between the columns
- `column-rule-width` width of the line
- `column-rule-color` color of the line
- `column-span` used with header, which allows the header to expand over number of columns
- `column-width` width of the column

## User Interface
- `resize` will resize the element like textarea
- can be `horizontal`, `vertical` and `both`
- `outline` is a line outside the border
- `outline-offset` defines the space between the border and outline
- `box-sizing: border-box;` allow the element to set with including padding and border


## Flexbox
- it consists of flex container and flex items
- `display` property is `flex` or `inline-flex`
- with body property `direction: rtl;` will change the direction from right to left
- `justify-content` will horizontally align the boxes in different order
    - `flex-start` align left
    - `flex-end` align right
    - `center` align center
    - `space-between` align wide apart with spaces between the boxes
    - `space-around` align wide apart with same amount of spaces on start and end of the boxes
- `align-items` vertically align the boxes
    - `stretch` will stretch the boxes to the bottom of the parent box
    - `flex-start` move the boxes at the top of the parent container
    - `flex-end` move the boxes at the bottom of the parent container
    - `center` move the boxes at the middle of the parent container
    - `baseline` move the boxes at the top of the parent container, but the align will be according to the text of inside the items
- `flex-wrap` to wrap the elements
    - `nowrap` not to wrap
    - `wrap` to wrap
    - `wrap-reverse`
- `align-content` it modifies `flex-wrap` but works same as `align-items`, it works vertically
    - `stretch` will stretch the elements vertically
    - `flex-start` will align all the elements vertically on the top
    - `flex-end` will align the elements vertically on the bottom
    - `center` will align the elements vertically at the center
    - `space-between` will align the elements vertically with equal space between the elements
    - `space-around` will align the elements vertically with equal space between the elements and around it
- `order` setting up order of the elements
- `margin: auto` will bring the element to the center of the page, vertically and horizontally
- `margin-right: auto` on the first flex item. This will cause all the extra space to be absorbed to the right of that element
- `align-self` will align the element vertically
    - `stretch` will stretch the boxes to the bottom of the parent box
    - `flex-start` move the boxes at the top of the parent container
    - `flex-end` move the boxes at the bottom of the parent container
    - `center` move the boxes at the middle of the parent container
    - `baseline` move the boxes at the top of the parent container, but the align will be according to the text of inside the items
- `flex` specifies the with of the items, same as `col-span`


## Media
- Css2 media queries where based on devices computer screen, tv screens, printers, handheld
- Css3 looks at the compatibility of the device
    - the will check height and width of viewport of the device
    - the will check the with and height of the device
    - orientation
    - resolution
- media type
    - `all` for all devices
    - `print` for printers
    - `screen` used for computer, tablet, smart-phones
    - `speech` used for screen reader


-----------------------------------------------------------------------------


# Responsive
- `meta` will have property `width=device-width` to set the width to maximum width
- `initial-scale=1.0` will set initial zoom to 1


## Rules
- elements should not exceed the width of viewport
- content should not rely on viewport to render well
- using media query to apply styling
- mobile first
- `max-width` for image will scale it to original size and but not more then that
-