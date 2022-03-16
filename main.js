const { Telegraf } = require('telegraf')

const bot_token = "1962145724:AAE4lm_TotqBBwmP3zHkF-e2jSttz8_URM4" //Bot Token Here

const bot = new Telegraf(bot_token)

const BotStart = async (ctx) =>{
    try{
        const id = ctx.startPayload
        if(!id){
            var button = [
                [{ text : "🎁 Open Channel🎁" , url : "http://t.me/ta_officials" }]
            ]
            ctx.replyWithMarkdown("*🕵‍♀️ Hello "+ctx.from.first_name+"\n\n💞Welcome to User Verification Bot\n\n🗣️You are Redirected from Website*",{reply_markup:{inline_keyboard:button}})
        }else{
            var base64 = ""+ctx.from.id+"";
            var buffObj = Buffer.from(base64, "utf8"); 
            var string = buffObj.toString("base64");
            var string =string.replace(/=/g, "%3D");
            var string =string.replace(/==/g, "%3D");
            var data = id
            var hi = data.replace(/earning/g, '');
            var id2 = hi.replace(/area/g, '');
            var button = [
                [{ text : "🎉 Open Claim Link🎉" , url : "https://tg-a.xyz/claim.php?token="+string+"&lid="+id2+"" }]
            ]
            ctx.replyWithMarkdown("*🕵‍♀️ Hello "+ctx.from.first_name+"  \n\n🗣️Welcome to User Verification Bot*",{reply_markup:{inline_keyboard:button}})
        }
    }catch(e){
        console.log(e)
    }
}

bot.start(BotStart)

bot.launch().then(console.log('Done'))
