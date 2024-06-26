{"version":3,"sources":["videojs-playlist-dev.js"],"names":["f","exports","module","define","amd","g","this","self","window","global","videojsPlaylist","e","t","n","r","s","o","u","a","require","i","Error","code","l","call","length","1","Object","defineProperty","value","_interopRequireDefault","obj","__esModule","default","_videoJs","_videoJs2","defaults","thumbnailSize","playlistItems","hideIcons","upNext","hideSidebar","mobile","player","undefined","currentIdx","videos","players","playlistsElemens","playlistsElemen","createVideoElement","player_id","idx","title","thumbnail","videoElement","document","createElement","videoTitle","className","setAttribute","innerText","appendChild","videoTitleText","onclick","ev","parseInt","target","getAttribute","playVideo","onPlayerReady","options","id_","playlist","toString","replace","items","createElements","updateElementWidth","el","map","video","prevBtn","onPrevClick","controlBar","insertBefore","playToggle","nextBtn","onNextClick","volumeMenuButton","on","createPlayingNext","addClass","nextVideo","parentNode","id","previousVideo","resize","p","itemWidth","playerId","playerWidth","offsetWidth","playerHeight","offsetHeight","itemHeight","Math","floor","youtube","$","newSize","styleTagId","style","getElementById","def","round","getElementsByTagName","firstChild","textContent","createTextNode","addEventListener","event","autoPlay","querySelectorAll","classList","add","remove","paused","pause","error","type","src","wmvPlayerId","wmvPlayerDiv","wmvConfig","file","image","wmvPlayer","jeroenwijering","Player","removeChild","vimeos","getElementsByClassName","curVideoId","poster","options_","autoplay","play","_this","ready","mergeOptions","plugin"],"mappings":"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","file":""}