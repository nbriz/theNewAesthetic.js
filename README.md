theNewAesthetic.js
===========
[// visit the project website](http://nickbriz.com/thenewaesthetic)

> If Postmodernism rejects the functionally-driven design of Modernism, the New Aesthetic is a "Semimodernism": it embraces the formal results of functional design but ignores the motivation. - [Kyle Mcdonald](http://www.thecreatorsproject.com/blog/in-response-to-bruce-sterlings-essay-on-the-new-aesthetic#6)

theNewAesthetic.js is an executable-essay / open-source javascript artware-library for quick [re]production of 'New Aesthetic' compositions and related new-media art tropes. 

artist and researcher [Greg Borenstein](http://thecreatorsproject.com/blog/in-response-to-bruce-sterlings-essay-on-the-new-aesthetic#4) has compared the New Aesthetic [NA] to a recent movement in philosophy called Object Oriented Ontology. So it only seemed appropriate to utilize an object-oriented programming language, like javascript, to code-ify it. 

theNewAesthetic.js uses the HTML5 canvas element, so you'll need a modern browser (fux IE), there's a tad bit of server side activities, so (where noted) it's best to run a local server for development ( i.e. [MAMP](http://www.mamp.info/en/index.html) or [WAMP](http://www.wampserver.com/en/) )

> At its best, this could be a useful movement. At its worst, another meme. - [Aimee Knight](http://aimeeknight.com/2012/04/10/the-new-aestheticperhaps/)

### background methods

> [NA] exists wherever there is satellite surveillance, locative mapping, smartphone photos, wifi coverage and Photoshop. - [Bruce Sterling](http://www.wired.com/beyond_the_beyond/2012/04/an-essay-on-the-new-aesthetic/)

we'll start with two methods for creating backdrops for your NA compositions, .bg() and .googleMaps()

    NA.bg();

the .bg() method doesn't require any parameters. By default this will render a 'Photoshop' transparency layer (i.e. grey/white grid). You can change the color of the PSD transparency gird by specifying a hex-color value (i.e. #ff0000 = red) as a string. You can also send the string "rainbow" to get a rainbow PSD transparency grid

    NA.bg("color");

you can also create 'satellite surveillance' backdrops using the .googleMaps() method. To use this method you must first set the .apiKey property to your own [Google Maps (V3) API Key](https://developers.google.com/maps/documentation/javascript/tutorial#api_key). The .googleMaps() method requires three parameters

    NA.apiKey = "yourGoogleAPIkey";
    NA.googleMaps("type", latitude, longitude);
you can use the following types = "roadmap", "satellite", "hybrid" and "terrain". Optional arguments include zoom level (integer), X and Y positions (integers) as well as width and height of the map (integers)

    NA.apiKey = "yourGoogleAPIkey";
    NA.googleMaps("type", latitude, longitude, X, Y, Width, Height);

### moar photoshop

another method which goes great with .bg() is the .drawAnts() method for drawing PSD selection ants. There are two ways to draw selection ant lines, the first is by sending parameters that specify the starting X and Y coordinates and the finishing X and Y coordinates (integers)

    NA.drawAns(fromX, fromY, toX, toY);

the second way is to set starting X and Y coordinates followed by null,null and then specifying the length of the line and the angle (integers)

    NA.drawAnts(fromX, fromY, null, null, length, angle);

### icons

> Appropriating + remixing graphic markers/standards from marginalised or "other-fied" disciplines/decades does not a new genre/paradigm make, especially when begging to be [or deliberately engineered to be] monetised by a system and/or individuals determined to emergent-capture [yes, this includes institutionally sanctioned galleries + alternative galleries + oldschool curators + newskool aggregators + conference-merry-go-rounders + theorists + panels + karma-seeking discourse boffins]. Codify, hipsterise + aggrandise at your leisure, but be prepared for watered-down, digestible, bastardised versions of worthwhile social + expressive currencies. -[ Mez Breeze](http://www.furtherfield.org/features/reviews/banality-new-aesthetic)

the library includes a method for rendering some of the more popular interface elements/icons often appropriated in NA worx, as well as a couple special icon methods. The basic method is .icons() which requires you to specify a "type"

    NA.icons("type");

at the moment these include, "file"(Xerox Star File c1981), "spaceInvader" (by Tomohiro Nishikado c1978), "watch" (Apple, by Susan Kare c1980s), "fillBucket" (Apple, by Susan Kare c1980s), "arrow" (universal cursor arrow) and "pointer" (universal cursor pointer).

optional parameters include X and Y position (integer), pixel size (integer) and the color (hex-color value string).

    NA.icons("type", X, Y, size, "color");

when rendering the "fillBucket" you can add an additional paramater at the end to change the color of the paint individually. This is also a hex-color value string.

#### .hourglass() icon

one special icon method is .hourglass(), this is an animated icon which does not require any parameters by default

    NA.hourglass();

the basic .icons() method, the optional parameters include X and Y positions (integers), pixel size (integer) and color (hex-color value string) which can also be "rainbow" 

    NA.hourglass(X, Y, size, "color");

#### go social with .fb() icon

> James Bridle is a Walter Benjamin critic in an "age of digital accumulation". Bridle carries out a valiant cut-and-paste campaign that looks sorta like traditional criticism, but is actually blogging and tumblring. His New Aesthetic Tumblr bears the resemblance to thoughtful critique that mass production once did to handmade artifacts. - [Bruce Sterling](http://www.wired.com/beyond_the_beyond/2012/04/an-essay-on-the-new-aesthetic/)

    NA.fb();

like the .hourglass() method there are no required parameters, the .fb() method renders a facebook 'like' thumbs-up icon which can be clicked. When clicked, the user is taken to a facebook share page which will allow them to post your NA composition to their wall. Optional parameters include X and Y positions (integers), pixel size (integer), and up three different color parameters (hex-color value string) outline color, sleeve color and hand color.

    NA.fb(X, Y, size, "outline-color", "sleeve-color", "hand-color");

if your composition is a .php page rather than an .html page you can add the shares.php code above your javascript and the number of shares your composition has will automatically appear in a bubble next to your icon. Note that .php is a server side language.

### Pixel Art

> The tools we make shape culture. The culture of technology is a human culture and a human experience. Reconciling with our inventions, we embrace the stylized pixel-goo as a reflection of ourselves. - [Jonathan Minard](http://www.thecreatorsproject.com/blog/in-response-to-bruce-sterlings-essay-on-the-new-aesthetic#2)

all of the image 'filter' methods use the HTML5 getImageData() method which requires that the image be hosted on a web server, and that the code accessing the image data is hosted on the same domain as the image. You can use something like [MAMP](http://www.mamp.info/en/index.html) or [WAMP](http://www.wampserver.com/en/) to develop locally.

the .pixelizeImg() method takes one required parameter, the source image path (string)

    NA.pixelizeImg("image");

 optional parameters include X and Y positions (integers) and pixelization size (integer) which by default is 8

    NA.pixelizeImg("image", X, Y, size);

at the moment there is no animated gif support in canvas. To get around this issue there is a special method .pixelizeGif() which takes a sprite sheet and (in essence) renders these as animated gifs. This method takes one more required argument, the number of frames in the sprite sheet image (integer)

    NA.pixelizeGif("image", frames);

this method also includes an additional parameter for setting the speed of the animated loop in milliseconds (integer)

    NA.pixelizeGif("image", frames, X, Y, size, speed);

### Glitch Art

> Yes, digital glitch is as much of a cultural artifact as the graininess of film or the bad colors of Polaroids.  - [Marius Watz](http://www.thecreatorsproject.com/blog/in-response-to-bruce-sterlings-essay-on-the-new-aesthetic#3)

like the .pixelizeImg() method .glitchImg() also makes use of the HTML5 getImageData() method and thus requires that the composition be hosted on a server (see [MAMP](http://www.mamp.info/en/index.html) or [WAMP](http://www.wampserver.com/en/) for local development)

the .glitchImg() method takes one required parameter, the source image path (string)

    NA.glitchImg("image");

optional parameters include X and Y positions (integers), glitch amount applied to horizontal data (integer) glitch amount applied to vertical data (integer)

    NA.glitchImg("image", X, Y, glitchX, glitchY);

> A glitch isn't inherently "New Aesthetic," but it certainly becomes that when appropriated. Just like the voxel sculptures, glitch revels in the visual result of a functional system purely for its aesthetic merit. - [Kyle Mcdonald](http://www.thecreatorsproject.com/blog/in-response-to-bruce-sterlings-essay-on-the-new-aesthetic#6)

just as with .pixelizeGif() in order to get around canvas' lack of support for animated gifs, the .glitchGif() method takes a sprite sheet as an image source and animates it. This requires an additional parameter to specify the amount of frames in the sprite sheet (integer)

    NA.glitchGif("image", frames);

optional parameters are the same as the .glitchImg() method with an additional parameter for setting the speed of the animated loop in milliseconds (integer)

    NA.glitchGif("image", frames, X, Y, glitchX, glitchY, speed);

### Developer Console

> The "New Aesthetic" is a native product of modern network culture. It's from London, but it was born digital, on the Internet. The New Aesthetic is a "theory object" and a "shareable concept." - [Bruce Sterling](http://www.wired.com/beyond_the_beyond/2012/04/an-essay-on-the-new-aesthetic/)

you can't have contemporary art without didactic info, naturally the library includes a "theory object" which can take as its parameter either an artist statement (string) accompanying theoretical text (string) and/or curatorial statement (string)

    NA.theory("statement");

as the notion of a "theory object" is relatively 'meta' this method functions accordingly, the statement does not appear in the actual composition. It is only visible in the developer console.

an additional method is available for console use .whereMyMouseAt(). Because so many of the methods take X and Y coordinates as position values you can use this method to display the current position of your mouse on the composition in your developer console by simply including the following method in your composition

    NA.whereMyMouseAt();



    