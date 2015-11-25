// install flowplayer into container
$f("audio", {
    // 2nd argument: Flash configuration
    src: "http://releases.flowplayer.org/swf/flowplayer-3.2.18.swf",
 
    // give the Flash object a background color
    // visible while player loads
    bgcolor: "#12699f"
}, {
    // 3rd argument: player configuration
    plugins: {
        rtmp: {
            url: "flowplayer.rtmp-3.2.13.swf",
            netConnectionUrl: "http://radioplayer.npo.nl/radio1/",
 
            // deal with potentially high server latency
            failOverDelay: 4000
        },
        controls: {
            scrubber: false,
            fullscreen: false,
            autoHide: false,
            height: 50,
            timeFontSize: 30,
            backgroundColor: "#12699f",
            backgroundGradient: [0.3, 0]
        }
    },
    clip: {
        url: "rockantenne",
        provider: "rtmp",
 
        // this is a live stream
        live: true,
 
        // http url for iOS
        ipadUrl: "http://www.rockantenne.de/webradio/rockantenne.m3u"
    },
    play: null // no need to load the play button
}).ipad();