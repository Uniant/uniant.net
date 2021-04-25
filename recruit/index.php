<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>採用情報 - Uniant</title>
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@UniantJapan">
    <meta property="og:url" content="https://uniant.net/recruit/">
    <meta property="og:title" content="採用情報 - Uniant">
    <meta property="og:description" content="Uniant の採用情報。入会申し込みはこちらから。">
    <meta property="og:image" content="https://uniant.net/uniantlogoblack.png">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <link href="../style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../decoration.css" type="text/css">
    <style>
        .topimg {
            margin-top: 50px;
        }
        .topimg img {
            object-fit: none;
            object-position: 50% 0%;
        }
        .textonimg {
            position: absolute;
            top: 150px;
            left: 5%;
        }
        .recruittitle {
            font-size: 35px;
            color: #ffffff;
            text-shadow: 0px 0px 5px #ffffff;
        }
        .recruittitleeng {
            font-size: 20px;
            color: #ffffff;
            text-shadow: 0px 0px 5px #ffffff;
        }
        .content {
            margin-top: 20px;
        }
        .interview {
            margin: 0 auto;
            max-width: 1096px;
        }
        .title1 {
            margin-top: 30px;
        }
        .title2 {
            padding: 0.5em;
            font-size: 23px;
            color: #010101;
            background: #eaf3ff;
            border-bottom: solid 3px #516ab6;
            display: inline-block;
            width: 100%;
        }
        .balloon {
            position: relative;
            display: inline-block;
            margin: -15px 0 15px 15px;
            padding: 7px 10px;
            min-width: 120px;
            max-width: 100%;
            color: #000000;
            font-size: 18px;
            background: #FFF;
            border: solid 3px #555555;
            box-sizing: border-box;
        }
        .balloonleft:before {
            content: "";
            position: absolute;
            top: 50%;
            left: -24px;
            margin-top: -12px;
            border: 12px solid transparent;
            border-right: 12px solid #ffffff;
            z-index: 2;
        }
        .balloonleft:after {
            content: "";
            position: absolute;
            top: 50%;
            left: -30px;
            margin-top: -14px;
            border: 14px solid transparent;
            border-right: 14px solid #555555;
            z-index: 1;
        }
        .balloonright:before {
            content: "";
            position: absolute;
            top: 50%;
            right: -24px;
            margin-top: -12px;
            border: 12px solid transparent;
            border-left: 12px solid #ffffff;
            z-index: 2;
        }
        .balloonright:after {
            content: "";
            position: absolute;
            top: 50%;
            right: -30px;
            margin-top: -14px;
            border: 14px solid transparent;
            border-left: 14px solid #555555;
            z-index: 1;
        }
        .balloonright {
            float: right;
        }
        .balloon span {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .questions {
            margin-top: 50px;
        }
        .member {
            margin-top: 15px;
            clear: left;
        }
        .slogan {
            font-size: 25px;
            text-align: center;
        }
        .title3 {
            font-size: 20px;
            text-align: center;
        }
        .twoform {
            width: 45%;
            height: 100px;
            padding: 20px;
            background-color: #888888;
            color: #ffffff;
        }
        .recruitform, .vacation {
            display: flex;
            justify-content: space-between;
            width: 80vw;
            margin: auto;
        }
    </style>
</head>
<body>
    <div class="header">
        <?php include('../header.php') ?>
    </div>
    <div class="topimg">
        <img src="recruittheme.jpg" alt="" width="100%" height="300px">
        <div class="textonimg">
            <span class="recruittitle">採用情報</span><br><br>
            <span class="recruittitleeng">Recruitment</span>
        </div>
    </div>
    <div class="content">
        <div class="slogan">
            <span>思うままに、未来をひらく場所。</span>
        </div>
        <div class="title1">
            <span class="title1left">採用形態</span><span class="title1right">|  Form</span>
        </div>
        <div class="recruitform">
            <div class="twoform">
                <span class="title3">正規会員</span><br>
                <span>Uniant の会員として活動に携わります。<br>メールアドレスを原則交付。<br>会員証明書を発行。</span>
            </div>
            <div class="twoform">
                <span class="title3">外部補佐</span><br>
                <span>Uniant に直接入会することなく、外部から活動に携わります。<br>契約期間は 1 か月で、必要に応じ契約を更新します。<br>活動成績により入会を検討します。</span>    
            </div>
        </div>
        <div class="title1">
            <span class="title1left">休暇</span><span class="title1right">|  Vacation</span>
        </div>
        <div class="vacation">
            <div class="twoform">
                <span class="title3">不定休</span><br>
                <span>不定休（夏季休暇・冬期休暇を除く休暇）は、誰しもが自由なときに取得でき、報告義務はありません。</span>
            </div>
            <div class="twoform">
                <span class="title3">夏季・冬期休暇</span><br>
                <span>基本的には設定しませんが、場合によって夏季休暇および冬期休暇を設定することがあります。</span>    
            </div>
        </div>
        <div class="title1">
            <span class="title1left">会員インタビュー</span><span class="title1right">|  Interview</span>
        </div>
        <div class="interview">
            <div class="questions" style="margin-top:0;">
                <span class="title2">Uniant に参加しようと思った理由を教えてください。</span>
                <div class="answers">
                    <div class="member">
                        <img src="normal1.png" alt="" width="50" height="50" class="interviewmember">
                        <div class="balloon balloonleft">
                            <span>YouTube の動画で宣伝されていたから。</span>
                        </div><br>
                    </div>
                    <div class="member">
                        <img src="horita.png" alt="" width="50" height="50" class="interviewmember">
                        <div class="balloon balloonleft">
                            <span>協力して何か作ってみたいと思ったから。</span>
                        </div><br>
                    </div>
                    <div class="member">
                        <img src="normal2.png" alt="" width="50" height="50" class="interviewmember">
                        <div class="balloon balloonleft">
                            <span>会員から招待を受けたから。</span>
                        </div><br>
                    </div>
                    <div class="member">
                        <img src="oshima.png" alt="" width="50" height="50" class="interviewmember">
                        <div class="balloon balloonleft">
                            <span>雰囲気がかっこよかったから。</span>
                        </div><br>
                    </div>
                    <div class="member">
                        <img src="mikuniya.png" alt="" width="50" height="50" class="interviewmember">
                        <div class="balloon balloonleft">
                            <span>自分の能力をより高めたかったから。<br>プログラミングを学習しつつ、グループでの開発に携われ、学ぶ機会にはピッタリだと思った。</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="questions">
                <span class="title2">Uniant に参加してよかったと思えることを教えてください。</span>
                <div class="answers">
                    <div class="member">
                        <img src="normal1.png" alt="" width="50" height="50" class="interviewmember">
                        <div class="balloon balloonleft">
                            <span>自由に活動できるのがものすごく楽しい。<br>自由だからこそ、誰もが意見を言えて、非常に楽しい環境だと思う。</span>
                        </div><br>
                    </div>
                    <div class="member">
                        <img src="horita.png" alt="" width="50" height="50" class="interviewmember">
                        <div class="balloon balloonleft">
                            <span>必要なものがあればリーダーがほぼすべて用意してくれる。</span>
                        </div><br>
                    </div>
                    <div class="member">
                        <img src="normal2.png" alt="" width="50" height="50" class="interviewmember">
                        <div class="balloon balloonleft">
                            <span>たくさんの人と交流でき、新しい価値観に出会えた。</span>
                        </div><br>
                    </div>
                    <div class="member">
                        <img src="oshima.png" alt="" width="50" height="50" class="interviewmember">
                        <div class="balloon balloonleft">
                            <span>仲間たちといろいろな活動ができる。</span>
                        </div><br>
                    </div>
                    <div class="member">
                        <img src="mikuniya.png" alt="" width="50" height="50" class="interviewmember">
                        <div class="balloon balloonleft">
                            <span>個性豊かなメンバーたちと、一緒にものを作り上げる快感を得られる。</span>
                        </div><br>
                    </div>
                </div>
            </div>
            <div class="questions">
                <span class="title2">新規に参加を考えている方に伝えたいことを教えてください。</span>
                <div class="answers">
                    <div class="member">
                        <img src="mikuniya.png" alt="" width="50" height="50" class="interviewmember">
                        <div class="balloon balloonleft">
                            <span>人生で大切な経験になる。ぜひ参加してほしい。</span>
                        </div><br>
                    </div>
                    <div class="member">
                        <img src="normal2.png" alt="" width="50" height="50" class="interviewmember">
                        <div class="balloon balloonleft">
                            <span>これを機会に、いろいろなものを創りましょう。</span>
                        </div><br>
                    </div>
                    <div class="member">
                        <img src="horita.png" alt="" width="50" height="50" class="interviewmember">
                        <div class="balloon balloonleft">
                            <span>積極的に活動できる方に来てほしい。何を作りたいか明記すると採用されやすいかもしれない。</span>
                        </div><br>
                    </div>
                    <div class="member">
                        <img src="normal1.png" alt="" width="50" height="50" class="interviewmember">
                        <div class="balloon balloonleft">
                            <span>時間や場所に縛られず、いつでもどこでも楽しく活動できる。</span>
                        </div><br>
                    </div>
                    <div class="member">
                        <img src="normal1.png" alt="" width="50" height="50" class="interviewmember">
                        <div class="balloon balloonleft">
                            <span>堅苦しい雰囲気はないので、気になっているならばぜひ参加してみてほしい。</span>
                        </div><br>
                    </div>
                </div>
            </div>
        </div>
        <div class="title1">
            <span class="title1left">申し込み</span><span class="title1right">|  Requests</span>
        </div>
        <div class="request">
            <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSewMtmIi-baZVPHfHvADcertsLZIQITrNDwB42wNfPtcgMQ_g/viewform?embedded=true" width="100%" height="500px" frameborder="0" marginheight="0" marginwidth="0"></iframe>
            <a href="https://docs.google.com/forms/d/e/1FAIpQLSewMtmIi-baZVPHfHvADcertsLZIQITrNDwB42wNfPtcgMQ_g/viewform?usp=sf_link" class="animebutton" target="_blank" rel="noopener noreferrer">Google Forms リンクはこちら</a>
        </div>
    </div>
    <div class="footer">
        <?php include('../footer.php') ?>
    </div>
</body>
</html>