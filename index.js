config = require('./config/config.json');

const http = require('http');
const https = require('https');
const querystring = require('querystring');

if(config.extensions){
    let extensions = config.extensions.split(" ");
    for(let extension of extensions){
        switch(extension){
			case "randomad":
				if (config.randadenabled) {
					config.randad = Math.floor(Math.random() * config.randadmax);
					config.ads_image = `${config.serverurl}/ad${config.randad}.png`;
				}
				break;
			case "ua":
				config.apiurl = "vk-api-proxy.xtrafrancyz.net";
				break;
        }
    }
}

const vkRequest = (method, params) => {
    return new Promise((resolve, reject) => {
        let postData = querystring.stringify(params);
        const req = https.request({
            method: 'POST',
            host: config.apiurl,
            path: `/method/${method}`,
            headers: {
                'User-Agent': 'VKAndroidApp/5.32-3620 (Android 8.1.0; SDK 27; armeabi-v7a; Nexus 5; ru; 1920x1080)'
            }
        }, res => {
            body = "";
            res.on('data', chunk => {
                body += chunk;
            });
            res.on('end', () => {
                resolve(body);
            });
        });
        req.on('error', (e) => {
            reject(e);
        });
        req.write(postData);
        req.end();
    });
};

const response = (res, base = true) => {
    res = JSON.stringify(res);
    if(base){
        res = Buffer.from(res).toString('base64');
    };
    return res;
};

const worker = async (req, res) => {
    let urlData = req.url.split("?");
    if(getData = urlData[1]){
        getData = querystring.parse(getData);
    }else{
        getData = {};
    }
    switch(urlData[0]){
        case "/":
        case "/index.php":
            res.writeHead(200, {'Content-Type': 'text/html'});
            switch(getData['method']){
                case 'getInfo':
                    res.write(JSON.stringify(config.infoRequest));
                    break;
                case 'getAudio':
                    if(getData['audios'] && getData['audios'] != ""){
                        let vkReq = JSON.parse(await vkRequest("audio.getById", {
                            access_token: config.token,
                            audios: getData['audios'],
                            v: "5.92"
                        }));
                        res.write(response({
                            response: vkReq.response,
                            flexad: config.flexad
                        }));
                    }else{
                        res.write(response({
                            message: 'Set audios parameter',
                            flexad: config.flexad
                        }));
                    }
                    break;
                case 'loadTrack':
                    if(getData['track'] && getData['track'] != ""){
                        res.write(response({
                            error: 'Deprecated.'
                        }));
                    }else{
                        res.write(response({
                            error: 'Invalid link'
                        }));
                    }
                    break;
                default:
                    res.write("Method required");
                    break;
            }
            break;
        default:
            res.write("WTF dude, why you doing?");
            break;
    }
    res.end();
};

http.createServer(worker).listen(8080);