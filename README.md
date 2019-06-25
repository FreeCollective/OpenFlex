# OpenFlex
OpenSource implementation of server-side FlexMusic part for SovaLite

## How to use
1. Setup PHP and webserver
2. Clone this repo to `/var/www/html/` or another path, specified in webserver config
3. Configure `.config.php` for work
	- Token __with working audio__
	- Server URL/IP
	- Ad image name
	- etc
4. Connect server, by specifing address in _Sova Lite >> Settings >> Misc >> Owl's nest >> FlexMusic >> Server URL_
5. Listen music as default
###### Buy audio subscription for work, because OpenFlex does not bypass protection

## What implemented
- [X] Connecting to the server (client-side)
> - [X] getInfo
> - [X] GenerateAd
- [X] Ad banner
> - [X] GenerateAd
> - [X] getAudio
- [X] Working with music
> - [X] getAudio
- [ ] MP3 Proxy __(DEPRECATED)__
> - [X] loadTrack
- [ ] Security
> - [ ] Encryption
>> - [X] Base64
>> - [ ] RSA
>> - [ ] AES
>> - [ ] Blowfish
>> - [ ] Another symmetric encryption
- [ ] Server Extensions
> - [ ] Base  config
> - [ ] User-Agent access limitation
> - [ ] Random ad
> - [ ] Paid server
