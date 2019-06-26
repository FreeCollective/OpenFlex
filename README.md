# OpenFlex
OpenSource implementation of server-side FlexMusic part for SovaLite

## How to use
1. Setup nodejs on server
2. Clone this repo
3. Configure `.config.cfg` for work
	- Token __with working audio__
	- Server URL/IP
	- Ad image name
	- etc
4. Connect server, by specifing address in _Sova Lite >> Settings >> Misc >> Owl's nest >> FlexMusic >> Server URL_
5. Listen music as default
###### Buy audio subscription for work, because OpenFlex does not bypass protection

## What implemented
- [ ] Connecting to the server (client-side)
> - [ ] getInfo
> - [ ] GenerateAd
- [ ] Ad banner
> - [ ] GenerateAd
> - [ ] getAudio
- [ ] Working with music
> - [ ] getAudio
- [ ] MP3 Proxy __(DEPRECATED)__
> - [ ] loadTrack __(stub)__
- [ ] Security
> - [ ] Base64
> - [ ] Paid server
> - [ ] UA restictions __(extension)__
- [ ] Server Extensions
> - [ ] Base  config
> - [ ] User-Agent access limitation
> - [ ] Random ad
