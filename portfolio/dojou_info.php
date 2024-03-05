<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>黒本道場</title>
    <link rel="stylesheet" href="dojou.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 18px;
            color: #333;
            margin: 2px;
        }

        @media only screen and (max-width: 600px) {
            body {
                font-size: 13px;
            }
        }
    </style>

</head>

<body>
    <header>
        <h1 class="myFont"><b>黒本道場</b></h1>
        <nav>
            <ul>
                <li>【初級】　全139問収録</li>
            </ul>
        </nav>
    </header>

    <main>
        <h2>PHP資格試験対策</h2>
        <form>
            試験内容<br>
            ・設問数　40問<br>
            ・試験時間　1時間<br>
            ・合格ライン　7割正解<br>
            ・出題形式　選択式<br>
            <br>
            申し込み先：<a href="https://cbt.odyssey-com.co.jp/phpexam/index.html">odyssey</a><br>
            ※受験には、Odyssey IDの登録（無料）が必要です。<br>


        </form>
        <form>
            正解数: 1/1 正解率: 100%<br>
            <div>
                結果：正解<br><br>
                解説：<br>
            </div>
            <br>このアプリでは問題を解き終えた後、正解率や正解数が出ます。<br>
            自分がどの問題を間違えたかを分析する時に役立ちます。<br>
            少しでも勉強のお役に立てたら幸いです。<br>
        </form>
    </main>
    <nav>
        <ul>
            <li><a href="central.php?Page=q1">【一章】</a></li>
            <li><a href="central.php?Page=q2">【二章】</a></li>
            <li><a href="central.php?Page=q3">【三章】</a></li><br>
            <li><a href="central.php?Page=q4">【四章】</a></li>
            <li><a href="central.php?Page=q5">【五章】</a></li>
            <li><a href="central.php?Page=q6">【六章】</a></li><br>
            <li><a href="central.php?Page=q7">【七章】</a></li>
            <li><a href="central.php?Page=q8">【八章】</a></li>
            <li><a href="central.php?Page=q9">【九章】</a></li><br>
            <li><a href="central.php?Page=q10">【十章】</a></li>
            <li><a href="central.php?Page=q11">【十一章】</a></li>
            <li><a href="central.php?Page=q12">【十二章】</a></li><br>
            <li><a href="central.php?Page=q13">【十三章】</a></li>
            </li>
            <li><a href="game2.php">【ミス問題】準備中</a></li>
            </li>
        </ul>
    </nav>
</body>

</html>
<?

//   _____           _           _____          _
//  |  __ \         | |         / ____|        | |
//  | |__) | __ ___ | |__   ___| |     ___   __| | ___
//  |  ___/ '__/ _ \| '_ \ / _ \ |    / _ \ / _` |/ _ \
//  | |   | | | (_) | | | |  __/ |___| (_) | (_| |  __/
//  |_|   |_|  \___/|_| |_|\___|\_____\___/ \__,_|\___|
//  ____  _              _______   _______ ____  _  __     __ _
// |  _ \| |            |__   __| |__   __/ __ \| | \ \   / /(_)
// | |_) | |_   _  ___     | |       | | | |  | | |  \ \_/ /  _
// |  _ <| | | | |/ _ \    | |       | | | |  | | |   \   /  | |
// | |_) | | |_| |  __/    | |       | | | |__| | |____| |   | |
// |____/|_|\__,_|\___|    |_|       |_|  \____/|______|_|   |_|

// `.`.`.`.`.`.`.`.`.`.`.`.``.`.``.````..(XZV!.w_dVWWWkHHHkkHHHHMMHHHH@HHHMMM@HHpWWfpMHVWWWMMMMHWQHM@@MMMMMHMM@MHNkMNkHWfHHVyVWMMMNHHMMHkmXWWWWk&adVYWWHHMMHHHMMMHHMHHMHMHMHH,`__.`.`.``.`.`.``.`.`.``.`.`.
// .`.`.`.`.`.`.`.`.`.`.`.`.``.`.``..`.JZ0T>.jOw<dXZZVyVfffppppbkqqmMMHMNMHHMMgHpWHWHMHHHH#XWHuHWHWHH@@M@@@M@@@@H@mMHWWHWHMHWkHWH9WXWfVVHyyyyyyyyyyyyyWAdYHMMHHHMHHHHH@HMMpNHHx.` ~-.`..`.`.``.`.`.`..`.`.`
// `.``.``.``.``.``.`.``.`.`.``.`...(vwV^(-JwwXzvrzzXWUUXuZZZyyVfpHHHHHMMM@NMHHHHMMMMMWkQWHWXWZXXXHVVWHWHmHMM@HHH@MMHHWNVWHkZX84dVffWWWUUVOzu&&zzOTUWWkWyyWAYHMMHHHH@HHMkHNWMM@n.`.` ~_. `.`.``.`.`..``.``.
// .`..`..`.``..`..`.`.``.``.`.`.__<+v!.~(rrwXXztrwzvvrvvZC77?!~__(;+1zOrzuUHHHHMHVXHWHWWVWkWWHWHyHXkHqHHHHHM@@@H@@M@@@MWHMHVuWVVVWUIudXQQHH@@@@HHQkkAxZWWWWVWdMH@H@HHMHWkHNWHMMW+ .```..___..___`.``..`.``
// `.`..``.`..`.``.```.`.``...~_<~(?~`.``(twXwOzwrrttO<!`  .._~<<<<?+C1++-?7XuZWHHMWHWyVHWW#yWyyWkWkH@@MMMMMMM@MMMMMHMMMMM#upHWW00AXQMMMHHH@@H@@HHHHHMNkkwXWffffdMH@H@MHkHHMNWMkkpk,..```..`...`.``.`.`.`..
// `.``.`.`.``.``.`.`.`...__~~..__~. _`` (ZvrO1ztOz<!   ` .(zwXkkWWkkWkA&+vGx+UyyWHkWWWHWyyHWWHkH9WWHHHmmmMMNNHkHHkWHHHNM5JVWHS0yQHMH@HH@@H@@@H@@@@@H@@HMNyUXWVfWWMMHH@MH@H@HNWMbkWpk,.```.``.`.`..`.`.`.``
// `.`.`.`.`.``..`...-<<!`.`. __!`..`` `.z1tttOOz>`   ..zwZUUXXH@@@@@@@@HHHszUszWVVWkHHkWQQHH97JdKNWVWHkkbbbWWHHMMHQkWHW$XVfWX6ddMHH@H@@H@@H@H@H@H@H@H@H@NMHwXWWWHWMMMHHMMHH@@NWHbkHppk,.`.```.``.``.``.`.`
// .`.`..-...__<?<~_``.````..~_.`.-   `.z:_zttlv`   .+zXXvvzzuuuXUHH@@H@@@@NHsOWydWfWHHWHV7(JWkkHWWHyVppbbbWW#WqqqqWWHHDXffWdIdMHH@H@@@H@@H@@@H@@@H@@@H@H@HHNOXXWffWMMNMH@MH@@MHHHbkRTWpW+..`.``.`..`.`.``.
// `.``.`.`.``.```.``.``.`.~_~``._` ``.z>..(rl>    (zwrvvzzzzzzzzzuzuWM@H@@@@HSOdkZWfpWDJkJWHqqkkWHWVffppbbWWNWqkqkqHWKJfVfXDzMM@@H@@H@@H@@H@@@H@@H@H@H@@H@@HbzRWVKWHMNMMM@MMHpWXkkbbh.?4pW&.`.``.``.`.`.``
// .`.``.`.`.`.`.``.`.``..~_``..`` ` .dur`.zr>`   +wrrvvzzuzuuzzzzzuzuuXM@H@@@NSOdkdWffWWpWbqqqqkWWKWQH@@MNHHWkHqkqkWVbWVVkd1dMH@@@H@H@@H@H@H@H@@H@@@H@H@H@@MM<ddHHHWHkMMMMMNWUZZXWWbbh..-?Uk,`.``.``.``.`.
// `.`.`.``.``.``.`.``..__~``..!` .~.duuZzlOZ`  `(OrvzzzuuzzzzuuzuzzzzuzuHMH@H@KZwHzHpWpNfKbkHHqHHNMMMMNMMMMMMNNMNNHXWRfVVSk(d#<?HH@@@H@@H@@@H@@H@@H@@H@H@H@HHIdkWVZWWWHHNWWWWWWkZWWbbbR,.``-7&.`.`..`.``.`
// `.``.`.`.`.`.`.``.`.!_`.` (<```.JdZuuwrtw{  ..zXzzZ77<_(zzzzzzzuzzzzuzuzXWMMN$wHkdHHMHNkqMMNNMMMMMMHgmmmmmgMMMMM#HMKWWfkW<d#<::<WMMMH@@H@@@H@H@H@@H@@@H@@HHOdWSWZXXHWHMNHpHWfWWXHHpppv+..`.(c~.`.`.`.`.`
// .`.`..`.`.``.``.`..~~``..<~` .(OwyZZXzvC~~  _.dC<~~~~_Jvzzzzzzzzzuzzuzzuuuzuu6wHSd@@HHHMMMMMMNMMqqqqqqqqqqqqqmMMWdHNWWpRdnzNI:::OyyyyWHMH@H@H@@H@H@HH@@H@MKwXWXXukXkNHKMNHHWfWfWHkHppW/i`.``(...```.`.``
// `.`.````.``.`.`. (_~.`.~._`._(jXZYC+zOC(<~ -:.d{.~..~(vvzzzzzzzzzzzuzuzzzzuuu1XWVdHHHHWMMNNMMNMmqqqqqqqqqqqqqmMNMMWHWWHbXWyVNI::?WyyyyyyyHM@H@@@H@@@H@H@MHwXHSXzz0NHHHWMMMNHqHMqHHHHWph-1.`.`.`..`.``..`
// .`.``..``.``.`../__`.-_`- _`-<(uuuZdk>x1_>Jlj.kI~.~~.(vzzzzzzzzzzzzzzzuzzzzzCy0wwSXUWHWmMMMNNMMqqqqqqqqqqqqqmmMHNWWWWHWbWXWXZNc-:?XyyyyyyyyWMH@@H@@@@@HMWXXHSuXzZdHMHHWMMNMHMMmHqqqHWWp[ 1 ```.``.`.``.`
// ``.`.``.``.```.<_.` _...~ `.(zzXXXXWtud0lwrr+n?d;~~~~(vvzzzzzzzzzzzzzzzuuuXCzIj0ZrZOQMpHMMNMMMMqqqqqqqqqqqqqqmMHXMkXRWHpHWWXWkWn<<(TyyyyyyyyyH@H@HHH@MHWXXWSukudqMHNqHHMMMHqqHHukkHHbWWW- 1 `.``.``.``.`
// `.`.`.``.`..`.>_.` (._` ._((twzXWpWDJWkuukuuXvkJXx~.~~?vvzzzzzzzzzuzzuzzzZ1ZCJX0rZzdMMHHMNMMNNMHHHHmqqqqqmmmmmHNuXHXWHXWWWWKXWKWWhJ+?UyyyyyyyyH@@@MMHWXXWWZZuuXwMNqMmmMMNHHHqMMuSWSV1gWWn. >.``.`.``.`..
// ..__-........><~~`` ....J+IjrrXpWHp$zUWHkWkuuZZWyWkJ~~~(jvzzzzzzzzzzuzwZOdVidWWyHOwMMMNbMMMNMMMMmqqqqqqqqqmmmmmMkudHkkHkNHW6<?XWWWHkpHVWkkkkkkWHWWWXWXWkWkZuXSXkMNHMNMMNMMMHHHMHXwkRdHHWW;` :`.`.`.``.``
// ``.`.`.` __~c~~(~_!(Iz?<1zw?1vWWVfWb1CZV6MHkZXQkXHkWXkJ-_~?wzuuuuuXXZ0&XVGdWWZZZXQMMNMMMMNMMNMHmmqqqqqqqqqqqqmmHMkzdHkHNXMm,~~(wWWWMHHHHkHHHkQkHHHMWXHVWMWXWQHkkMMMMMMMMMggggHMNkHWHdHWdWy/.._`.``..``.`
// `.`.``.``` /``..___!` .+uX%` JwWfWVW/4bkHNvWHXNWpkXHNkWWyWHHfWWWXAwXkHWXWHWyyyXXdMNMNMMMMNMMMHmmqmqqqqqqqqqqqmmmMMkXdNHNN$?TWmyXXkWWHMHHQQQQQkHHHHfVyyyWWWNMMMbHMMMMNNMNMMHg@mMMNHHkNZSdpWZ<._``.``.``.`
// .```.``.`.(_.``.~` .(+uuZf .jOXXXXyWHm4bHMnvWHMHpppWHQWMMM@@HHH@HmHHHWHHyyWXWXNMMNNMNMMMMMNMmqqqqqqqqqqqmmqqqmqmqHMkWMMNn-...?7UHkXWVVVVVffVVVVVffWWWWWHM##MMMNMMNMMMNMMkHHMHHHNMNHHkHMHHWO<< _`.`.`.``.
// `..`.`.`.._``._ .(>1uXuV1!.jwUzWXyWMMMNgWHZkdHMHWWWpWNHHHMMHHHHHHHHyyZZXXWmQMHM###MMMMMMMMHqqmmmHHHHHNNNNNHHHHmmqqqMNWMMMNe-...(O0WHHkkWkkkkkkkHHWHMMMH#HHMHMMMMNMNNMMNMkHMMppHMHHMMHkkkWXZO<<`.`.``.``.
// `.`.`.``.~ .~.(>>1uuuV! :.+v+wvXQMHHqMWMMNN?WNHD?7TWWWWWfVyVyyyyyXkXVWWqMMHHHHHMNMMMMMMMmmHHMNNMMMMMMMMMMMMMMMMMNNHmMMNkMMMMNa-OttXppppHHHHHHg@@MH@HHHHHMMNMMMMNMNMMNMMkbk@HWpppMMMMMNHHHkuyO+-``.`.`..`
// ````.`` .~.(;>>+zuuV!.`_-z>+dWwHMMHWkHNdMMNp<UHe-._~<jwXWkHkWkHHHHHHMMHHHHMHMMMMMMMMMMgHNMMMMMMMHbpbbbbHWMkkkMMHMMMMNNMM#NkWMMMMNmkWppppWHHH@@HHM@MMMMNMMNMMMNMNMMMMMMkbbbHWHffpWWHMMMMHKfkwOv+-``.``.``
// .`.`.._.(;;>++wzzZ!_` _(1<jXZWM@MXXXppWRWMMMm;?WMm&-(jWVWHmHHH@HM@H@MH@H@MNMMMMMMMMMNMMMMHkkNMMbppWyWbHHMMbbHMbbbbbHMMMMNMMNMNNkpWHMMMM@NNNNNNNMMMMMMMMHNMMMMMNMMNMNMbbbbbWWHfXZWpWMMMMMHVWXuw-+-.``.`.`
//  .-_.(;;>++zwwOv~_.`.<(1<jWZX@@BZ1dbppfWHHMNMNx+?WMMNmkWfpkqH@@MM@@MNNMMMMHQMMMMMMMMMMMkkbHHNbbpWZZuWHWpWpppHZXpbbWHHbHMMMMMNMMMMMNNNHkkWWkbbbkWWWHNNMMMMNMNMNMMMNMMbbbbpWXKNXuuXppWHgKMHkWHuul 1.`.``.`
// .(<<+++zrrZ7<_!-_`..~(>>zXSZHH8>.JWpffpWHWHMMMMNgx+zVHMMMMMMMMMMMMMHWWWQMMMMMMMNMMMNMkWWWXHbbbWSuuuQHSuXHXUWXUXppbUUWfppppHMMMMMNMMMMMMMMMMMMMNMMMMNMMNMNMMMMMMMMMHMpppWUuZKHHHkZXWpWKNHWNWXHuul.1`.`.`.
// ?=zzz77!_``` ~_.`.-~(2(JrdkWfz!`(WppfpfWuuXMNMMMMMMNNNNmQQQkQQQQmNNMMMMNMMMNMMMMMMMHUZZZXWppWUuuuuqMSuuXuuXXzzwUWSuuuXWfpppHppHMMMMMMNMMMMMMMMMMMMMMMMM#MMMMMNMMbpWWWWUuuuuHWWHHHkXpHWWHXMNWWHuun ~`.`.`
// ``.`.`.`..`.(_`` _(+d>Irw3WD! `.XUffpfpKXkuXWMMMMNMMMMMMMNMMMMMMMMMMMMNNMMMMMMHMMUuuuuXWuXWUuuuZXM#uuuuSuuuzzzzXXuuuuuuUUUSuuuXWWWNfWHMMMMMMMMMMNNNMMMMMNMMMbHMWWXudSuuuuuuHWNHHWWWWHWHWXWKWyWuuZk._```.
// `.`.```.``.._`..<+?1X(zr2(t``` J0zXffpWwdkuppSWWHMMMMMMMMMMMHMMMMMMMMMMMMMMMWHHWuuuZuXSuXUuuuZZdM#uuuuXwXuzzzzduuuuuuuuuuuuuuuuuXHUuuXUWWWBuuZHWHpppppMMNHWUuuWZuuuXSuuuuuuHMMMHbHWWHWWHXSWOZXZZuuX&_.`.
// .```..``.`.~`..1???dOytZ`Z ```(0twzUUXXdMkXpfuwWppppMMbpppWMbppppppMMNM@MUuuXWuuuuuuXUXXuuuuuQMNMSuuuuSuzuzzzXuuuuuuuuuuuuuuuuuXSuuuuuuuXKlOXXdXWUWWffWMMWuuuuXuuuuXXuuuuuuHWHMMMMHHNHySHkWkld4ZuuuuX,.`
// `..```.``._..??.>>>1ZlXw>.\```.XrtvzzzX$wXXdfWzzdppppMHppppHXpppppbpMMMWuuuuXSuuuuuXKuXXuuuuudMM#KuuuuXwzuzzwSuuuuuuuzuuzuuuuuXXSuuuuuuuuXllllXORXXuuuuudNWXuuuuZuuuXuuuuuuuHWHMMMMHMMkXXdKkWlll ?TZZuuh,
// ``.`.``.`.(+>?.>>?.>zlldf.f```.yZtOzvzwX1wkZdfSzzzXpfWNWVyWWOXppppppWNMSuuuuXuuuuuuQHXUuuuuuX9MNMWuuuuXSzwuzXSuuuuzXuuuuuXuuuuXXXuuuuuuuuXllllllXduHuuuuuuMdKuuuuuuuuXuuuuuuuHMMMMHHMMMNkukHHXIlz;..`_?TXZ
// `.``.`. .<<>>>>>>jC<Jj!(~``.d0lldzvvXZ(tkIjyOzuzzzUHyyyyW6OwZWWWWUdBuuuuuuuuuuuuXHSuuuuzuXOwNMWSuzuzkwwzXXXuuuuuXSuuuuXSuuuXWuuuuuuuuXSlllllllvdkWXuuuuudM#uuuuuuuuXuuukuuX#MMMZWWMHbkHmWHHWz==z...`..``
// `.`. .(<>>>?++?<~(-/.{.\`` gSlllXvvwz\(lSr(0zzzuzzXSUUXuStzdXuuuZdSuuuuuuuuuuzudUuuuuuuX9ttdBXKuuzzXwzuXHuuuuuuuXuuuzXSuuuXSuuuuuuuXX9lllllllllwkSXuuuuuXMNuuuzuzuuWuuXWuuXHMM#z1Wyy0dyVWHkfl===I``.``.`
// ..(?<<??<~``.`.``</..`,```JyOlld0vvXw:(lXr(ZzzzuzzXuuuzXlv?zXzZIduuuuuuuuuzuuXWuuuuuzXXOlluHyWuuzuXUuzXWuuuuzuuXSuuuXSuuuXUuuuuuuuXWSllllllllllvKZOSuuuuuMNuuuuuuuuRuuypuuXWHHDllkXZSXHHyWUR=I==z;.``.`.
// `.`.``.````.`.`..>`./ ~``.X0lllukvw0w (=wr.I1zzwzuuzzuz$tz??C==duuuuuuuuzuuzXSuuzuzzX6tlllXVWSuuzXSuXW0uuuuuzuXSuuuXUuuXXuuuuuuuXXW6llll==llll=lXZlZzuuuudMXuuuuuuXSuuXbXudXfpSlzWyyXXXZQmWX2=O=lO.``.``
// ``.``.`..`.```..!.`.~```.dXzlldWzzXzw`(?z] I?vzwuuzuzzX1l?1?=?duuuzuuzuuuuzXUuuzuzXVtlllldyWSuzzXSzXHSuuuuuzuXXuuuXuuuXSuuuuuuuXfXOllll=lll=lll=dXllXuzuuXHSuuuuXuXuuuXHkuWXfpRlzWyWWWWKVWkWXc?zzz[`.`.`
// .`.`.`.`.``.``.:.`.<` ` JUZzldV0vwXuk`(=?t`<?OvdkuzzzzZ(v11??dXuuzuuzuuzzXXuuuzzXXIllllldyyKzzzXUzd0uuuuuzuzXuuuzXuuXXSuuuuuuXfW9llll=ll==ll=ll=dyllOSzzuuHkuuuuyuWuuXkkkX#WppHkXWNMMMHWWWHWkk;<l1w-``.`
// ```.`.```.`...:..!.!```,ZzIlzXSzvXXuR`(??O`(?zvwkuuzuu%(1z?=jSuuuuuXZXXuXSuuzzXXSlllllzdyVdzzzzXzXXzzzuzuzzuuuzuXuuXHuuuuuuXXVK6llll=l=lzzuzwwZVUWlllvwzzzXKuuuzVXXuuWkkSXWbHpWH@HMMMMWpHfWNHu$~j.([.``.
// ..``.`..`....>~.``(` `.z<wIldWuzwXU4U`(??d..?jvwSzzzuX!1zIzwSuuuzuuuuzwUuXUUXX00wsyllzgX6dUzzzzwXXUzzvzzzzuzzzwSuXWUuuuuuuXVW9lll=zuzXUXwVOI====zSllllwwzzuRuuuupXuudNpHZUdNXppHyXWZZyXWbfWH4XX/(``(.`.`
// `.`.``.````.:``.. }``.ZC(w1dyUzzV<<(z_.??d[ <1vvZuzzzd zZ1wkuuuzuuzuzXUzzXXk0tttVUAZW#WOwSzvvzwSzXzzzIOzzzzzzwSXWWuuuuuuXffWXwwwuzZXVV=====l==l=zylllllSwzzSuuuXWSuXHHWHVHMMKWpWkZyWXffWHWpR(Rvn_.`..``.
// ``.`.``.`. _`.```. `.C(_(OjySuzC~/.+d_.??db`(?OrXXzuzI.wwvXuuzuuuzuXSzXdWXwtttlllOdX9XAw#vvvvdXzwXzzZ>jvzzzzwWWWXuuuuuXXVWNkWV0U6l======zzzzzlOOwWwzwwOtSwzXuzXWHuXqHyWHWMMMNdfWpHXHyWHMHpWH(S(Z<``.``.`
// .`.``.`.`.(`.`..`;..^`(.(vdZuuZ.(`.=X) ??dX,.>zvwkzuz].vvXSuzuuzuXXzQMQNNgggAOOOdkSOllldOrrwXvvvkzzz>>>OvvvXXHUuuuuuXXyWWBUOOz=lzzzOOCOagggNMMMNMMMMMMMMMMNmyXSXUXHWWWNMN##MMNHbbbHHWHMHNbbW(%`1t. _`.``
// `.`.`.``..~``.``.i?.`.{.(dXuuX~.<`(lzt`<?dkG`<zzvXzuz](zdSuuuuzXXXgMMMMMMMMNMNMNNNggyZXSwtwSrrwXwvOC>;;zrAWHUuuuuuXXyyX0Oz===zZC=1ggMMMMMNMMNMNMNHWHHMMMMNMNMHXKXWyKZMMMMHkkWMNkHgNpMMMkMbHpf...w.`.``.`
// ``.`.`.`.;`.``..j~``..:~(dwXu\..>`+=kX.(?dXO[(?OvdXzurjwHuuuuXXQdMBuZuudMMNMMNMMMMMMNNBAydSOwUrZOtZ;;;JrdHUuuuzuuXZZXSOz====z1zQMNMMNNNMNMNMMNNMMNkzuzudXMNNBUXwWZXWdHQkHfpHHMHHMNMNHNWXXkHH>.``(_``.`.`
// .``.``.`.`.. .~`(`.``._.(CJwC...b`+=OX{(<dXRv/?zwvWzutOXXuuuXmMM#uuuuuXMMNmdmMMMNMNNMNkXX0wStttStZ;;;jwdWXuuuzXuZuXSO1===?=1vQMMNMNazjdNMNMNMMNNMNKuzzXSdNM#SdXWZZKX#wOdrrrZUUXWHXH8XHHm9Hkb[`.` :.`.``.
// .`.`..`.(`..`.``_.`..,.~(>zC``.X4`(=zOI((dXWRvJ=OvXkwldHuuXUXHMMNwvvvzdNMNMMMNNMNMNNBXXXgMMNZOOOZ;;<jQHUuuzXuuuuXUI====?=?zudMNMWMNHMMMMNMMNMM#""W@vzwSQMMBSWSZZuXZWWXWWWXXAdQdQkXwWppWP.WkkL.`. _`.`.``
// `.`.````<.```.`._`.``/.(:>v...I!-{.==XO(;dXHWyvzlXuXwIkHXUwUttdMMN-_~<?MMHVWUWMMMNMNVXd@8VHk9yZv<;+OdUuuXXuuuuX6==?=?=???1vOkXCzOMM#HUYHMNNMNsI+JdIzvIuMM8dw0uuuXSdNXMWWfVVWkXWkXSXpppH$.dWHR`.`.`.`.`..
// ```.`.``!.`.``.` .``.>~/.r..v<_..(.(=vZIl(WXXWpwzvXuWwWWRZttttlvMNN....dkh,((7TMMBVwyuWK.._<<(V<;JdSXXUXzzzXVI=?=????????????.>>>>dkN<1<7TMH53JJjKD=zCuMMSZw0uuuXSdMHWWHppppWpWHmNWpppW@I`(pkH.``.``.`.``
// .`.`...._``..`.`..``.<(!(.J1>._...1.<=zwz(SXdXHkwzdXXdWXZkttl>:?ldMM&.`.?Z(6J1j(+1+uvuf~...._J>+wWXU0zzzwVC+<<<>>>>>>?.>????.>>>>>>>dkXnJ3e++<++=-C1Z1JM#OOywXuuXZdNMWHMHbbbpbWbppWHbkHHZI.(WkH_..`.`.``.`
// `.`.```` .``.``.``.`._<(?.>~z..<..`(z,<=OZdkvkSuukZyWWdWWmwUyz~~:~1zTMNe...1+17UUU8C?C~.....-v=uHXUzvwZT>;;;;;;;;;>;;>;>>>>>>>>>>>;;>7Oz?XUW9w+<<jGvSW0l1JwuuuXudMMpbHHkWbbHWHkHkHqqkHVZI` HWH{``.`.`.`..
// `.`.``..`..``.`.``..:(?`.>(\.(.``.,<z,(?Odkd0==?zXykWffXuXWXX&-~~~_<+z7YWk+(-+111++--_<~.~(IuVSzXwVC<::::::::;;;;;;;;;;;;;;;;>;>>>+111++JJJJ+yVC1zz1???duuuuuXMMMNHH@HWHqkHWWMWMMmmHS_Ir`.WbW].`.``.`.``
// .`.`..`.``.`.`.`.``.J!``.~(~(!`..`,.<zi_1dXO4z????OWXHfWzzzStlvV1-_~~~~<<<<<<<?<:<~~~~.~(JAXzwZC<<~~(JJz77zOO7Cz+++;;;;;;;>;>;;;;>>>>>>>>+>>1>?<>?.>?.>jXzzzzXXHHMMWNHMMMMMMMHHHMM@@@H>.k\.`JqHb..`..`.`..
// `.`.``.`.``.`.`...?`-`.`(:+-!`.``.(._?=I-j?O~._?1+?OXWHfWwzZk=1<~~~~~~~~~~~~~~~~~~~~~.-JwSZC<<~-(dHAzXXvr~-==wkXWWAdYUaJ;;;;;;>>;;;;;;>;>>>>>>>>>>>+dUvvvwZXWkbHMMMkMMMNNMNMMMNM@@@F. X!.`,HMH``.``.``.`
// `.``.``.`..`.`.`.`.`..`.<:l:..``..+.(>+1vAOJo.(vZtGXRHHHkVyzds??<::~::~~~~~~~~~~~~~.(JV6<<~~(/<(zZyZZuuvv-.zzXppppppppksTHgJ;;;;;;>;;;;;;>>>>>>>>>uSrrrrwXMNWNMNHMNWNMNMNMMNNMMHH@P.`.r`...Hkq_`.`.`.``.
// .`.`..`.```.``.``.``.``.>+%.``.``.c(;;<_IZ01Z<(Hr_?ZHvZhdWWHyds??<:~~:~~:~~~~~~~~-(Z=<~~~-?+J{-zwZXXqNNku+-(ugkpWNNWWWWkXHaVMNJ;;>;>;>;;;;;>>>>>jVrtttwWgMNHMMMNWMHMNMMNMMMMM#MH@@_``,_```.HHH{.`.`.`.``
// `.`.``.`..``..`.`.`.`.`.:x.`.``.`.>:;+_(>{O<jI.7^..OWbUXk7G&7Hk2>><:~~~~~~~~~~~_<~~~~~(<(+Szzn>GykHVMMM#?9<(dMNWNMMNHWWWWgggHmdHNJ>;;+++++<;;;jZttttQgMMMHMMMMNMMNHMMMMNMNMMMNMM"..`.!.`.``dWH]`.``.``..
// `.`.`.`.`.``.``..`.`.`.((r`.`..`.,::(!.(<>jI<{o._(/(kWyXbdkMkkAWy+>>(((JJ<+1zOwUWKUUYGJXyZWdHN+jWWXHyHUUX>.~OXmmHWHHNHHWdMMNgHHqWAYkWHNmmmkKXWWHyuXMMMMHkHHMMMMWHHMHNMMMMMMMMY^.`.`._``.`.`,HHb.`.``.`.`
// .`.`.`.``..``.```.````.cj!`.``.`.>:(>``((_(O<%.1:<w-?XHwWsHdHNkpNxdZG+.JdWHWWWWkSOuJSQHdXHyMNMMJjSXXSXXuz<--dXHqqqqmHWHWMMMM@HqHXkWHgWQWMWHHHgNHHkWHWJdWWWMMMMHHHMNHMMMMMB=.`.``.`.`..``.`.,HkR`.`.``.``
// ```.`.`.``..``.`.``.`..>z.``.``.(:(>`.`<(.(z(~. I<+HHmkKXMmXHHMMMNWWWWyWWyXUXuXXWQWHHNNyKWHyWX0<(JkUXydNNMNMMNNMNQHHHHWMMMHgHWHWWWNHHNHHXVVWXWHHHHWHWHMHWVMMNMHqHMHbWK_7!.``.``.```.``.`` .HNqHp& .`.``.
// `.``.`.`.``.`.`.`..`.`,;r`..`.`.<(>`.`.>>.-j<_`..oJHMHMNdNJ7QHMMMMHHHVyyWWZZZyyZXkdMMMNWWWHyyy3JXXUUHMMMM#MMNNNMNMMNNNkfVMMHHWkHWMNMMMbHpWWXuXWWqHpWHMpWMHMNMHMMMHNWMN.`.``.`..`.`.``.`..JXWHHMNkh.``.``
// .`..`.`.`..`.`.``.`.`.(j>``.``.>(!`.`.((>`.j<..JzXK1WWHHHNhZ?WfMMMWKWHVWWWWmAZyZXXXHMMMKWZyZZXzwZ1gNMVHHq8HWMHMMNMHWMNMMHWUUXXdHMMMMHkbpWWWXQkkWHkkbWWHWNMMMHHMMMHHMMNHmJ..````.`.`.``.``MbMmmmHHH}`.`..
// `.``.``.``.``.`.``.```cJ.`.`..:J~.``. >( ``c.`JdHHR=dHWgHHMN1zWbMMHbkWyyVWHzHHkuXXHWHMMMWWZZkXXI(MMMNRllzwSOHWMMMHNMMNNKXUXwOwvWXMMHqWbkHHMHWMHHHbWHHpMMMMMNHMNZHHWHNMNMNHk, ```.``..```.JNHHHHHH@_``..+
// .``..`.`..``.`.`.`.`..zZ``.`,i!`.`.``,_}`..~. 14WWHRXWsvWyHMNzOMMMNpkXyVyHMmXWNXyyZZXXHWRWykWk3jMMHUw0zzOtwdWqmmmMNHMMMXSXHXzWwXWWkqHqqMMNMNMMHbkkHHfWHNMMMHMNMWkMNNNMMMNMNHqn,``.``.``.``.TMNM#".`.SewX
// `.`.``..``.``.`.```.`.?r`..+?_`.`.`..{(``. .?jdeZQdHvWHkdkMNMNOwMMNNHNXyyyyWWyVVVWXWQNMNMKWXX3gNdW6lllzvGggNNNHHHHHkHHMWXXNmQkHWWmWNNNM#NMMMMNHbbWMNpqMNMNMMNMMpWMmMMMNMMNMMMNHHJ ```..`.`.``..`.`.dpWHg
// `.``.``.`.`..``.`..``,1%.?!.``.```.`((\ .?(JHmgmmgmmHdWH@HXWMM#HXMMMd#NHyyXXwXUWWWWWMMHMNM0X0dMNk(llz1jMHMNNNNNMMHNMNHMHWkyyVWWHHNMMMMMNMMMMMMNNMMMNWHMNMMMMNkNW@mMMMMNNMMMNMMNNHHa.```.```.```.` kfWggg
// .`..`.``.`.``..`.``..(j%```.` ..-:~(js?~(dmgmgggggmmmHXWMHHHmdMRZUMMNMMMHR0wXVX0dyVVVWWMHHuX1MMfSrwI1gMNM9UOyZTHMMMMHHMMMHHmmHWHMMHMNMMQNMMMNMNWMMMH@MMMMMMNHMNMMNMMNMMNMNMNMMNMMNHHm+.`.`.`.`.``.dpHmgg
// `.``.`.``.`.```.``.``vz} .-?!``.`_(=!_(dmmgmgmHl(OWHmHXKMMWWWMNHNkWNMKHHkHXUwwO7wUXWHHMMMNkXd#HWOrkzqN@jwOswuXXHe7NWMXXHbWMMMHHMMWNMMNMMMNMNMMNHMMqHMMMNMMMHMMWHkkkMMMMMNMMMNMMMMNMNHHkl`.``..`..(Xpmmgm
// .``.`.`..``..`.``.`` IdC~.`..`..(!.-JWggmgggmmmz-<zvTCzZUzwXuZXHMNNHMNWMgHdRrtl-+zUVNHMMMNfWMHuuMMDdM5dXWUI=zdMHWNXMN#XMMMMMNkMHHgMHMMMNMMNMMNMWMHHMMNMMMNNNWfVffWpk9TTXMMMMNMNNMMNMMMHH&``.````.ypbgmmg
// `..```.``.``.``.` .__Sd:`.``..<_.(+WggmggmmmgmHY4(JwwUUXWWkkWWNMMMMHMNNM@NWkkkm&llldkNMMHMpWdHkXMMWd#JmHSk=<jWkHMWKWNNWMMMMMYTC<~::::?TMMMMNMMNMMMMMMNMHMMMNNHqWWW9>_.` jgMMMMMMNMMMMNMNHH+-...` RpbmgmH
// ``.`.``.``.``.`._-~`.Sd:``.-!.~(JWgmgmmmmgmBT++XpbHHstttwdHMMMHVWQMMNM#NMNWkkkHHmyttWMMM@MHpWM#WMMHZBJHWkX1dbkHMMM#MMMHB5>:~~:~~:~~~:~(==zTMMMNMHyyWHMMMMMMMMMMMKhJ<:_(H5=zwuVWMMMNNMMNMMNHHkWh,.HHmHggm
// .`.``..`..`. .___`.`.XX{.<~~~(uWHgmmmgmmH$-_?WppbppWWHgUIl=?MRXVC????MHMMMNWbkkkkkbkWM#M@HNpWMNXW8ugywZHMHHHHHHHBYWM>~~~:~~:~~:~~:~:~:(=?==?=zTWXyXWNMNHMMMMNMN#ttOUQM8rtOJGgMWWkMNMNMNMMMMNHHHbHHkqHMNg
// `.`..``.``._-~.``.`..ZWt~~.(JWWmmgmgmmmg0VVTi.(4ppppbHWNc==1eTNz1udV6=dNMNMMNHkkkkkHHMNHMdHHpHME+MMMNNZXHMMY"<.JdWHHHm-:~~:~:~::(((+tttzzzz=====zW@NMkkHMMNHMMBtllzdNUXyyGdNWUZOXXMMMNMNNNNMMNmMMMMNMNMH
// `.``.`.` _-~``.`.``.(ZWr~(JWWmggmmmmmmgI<~ ` ?- ?pbbpbWkMm=~-(zHZ=ugHMMMNMN#MNMNHQQMMHMMqkMHHpMRWMMNMMMY^-.dQWmmgmmgHHH/:~:((+zllttttttttttrtrrOzzMMMMNNHqkMMhylluM9wtw0dMHXvttwdkMMNMMMMMMMMMNHmMMMMMMN
// `.`.`.`._/.``.``..?_(yWnuWHmmgmmgmmmmmHv;_   `.1,(WpppfWkdk<;;;?WkIuggMMMMH#NMMHMHNMMHHpbbbHMNWMNXW@=_.uQWggmgmgmmmmmMHMslltllltttAggAOrrrrtrrrrrrwMNNMMMMN#wtzZWMWZww0dNWSuwGUrrXMNMNNMNMNNMNMMNqHMMNMM
// .`.`.._.!.`.``..>~~~(yWHHmggmmmgmmggmgHz1(~   ._On,WfffffHHN_:::<WHMMMMMMMNKkuXHkkMMWWppWHHWHMMHY!.JwkHmmmmmmmmggmggmgMHNOtttAggMMMMMMMNNNggggQAwrrvdMNNMNMWWAydMWkZXXMHKXZOZXdvrdHMMMNMNNMMNMNMNMNqMMNM
// `.`.._(```.` ,:~~~.(dyWMggmgmggmgmgmmmHjIIc__ (:<?h-WfffffH@N_:++dMMNNMM9XdMKKuuHkqWyyWWHHWHNHY_.JXWgmgmmmmmmmmmggmmgggMMmgMMMMMNMMNMMNMNMMMNMMMMMNmmkZWWWUZZXdMkuuWXMVWXUGSqM#wzdmMMNMMMNMNMMNMMMNNgmMN
// .`.._<_.`..,:~~..(dWMVWHmmmmgmmmmmmmmggyOdWs11(<++vH(WpppfpH@NyyyyyM#OQgMMMMNWkQgNNKVVWVHHMMY-jdHXWggggmgmggggggmggHNMMMMMMMNMMMHmHqkHHggmmggMMNNMMNMMMMM6==zdN0zwHX#WSSrqWHMMHSQMmgMNNMNMNMMNMNMMNMMNgM
// `..__!``.(!~~._(XWmgMfWggmgmmmggmgmgmgm@ZkvUIIO+OI!(NJWpppppMHNyZyyWMMHfffWWMNWMMMNNXfWVQmk$.OXXmmmmgmmgmggggNHgMMMMMNMMMNMMHmmmmgmHHHHkHggmgmHMMMNMNMNNHAz=uM0trXWMVHWvdSuXWH#zW@mmmMMNMNMNMNMMNNMMMMNm
// `.`((<(J>~~~_(WHgmgHMHHHmgmmmmgmgmgmmmmgdXvdyvzOz-JrZN?WppWWHMMNWpbbWMHWkHNMMMNMMMMMNWHWHpW>,OWHHmmmmmggHMMNMNMMMMMNNMMMHgHHHggmHHWHHHHHHgggggggMMMMMNMMkWWWMRlldX#VWkXdUQmXNHSdM@mmmHMMMMNMNMNNMNNMMNMM
// i..(+J>~~~.(XHgmmgmMHHHWmgmmgmmmmgmmggmmRWRWXROXkZywZdN?HH@@HMNMNkkkbMMHMMMHNMMHMNMMNMKHHHF.wdWkukVWHMNMNMMMMMMMMMMMHqqHHbbppWkH@ggHHMM@@ggMNM@ggMMMMNMkbbkMMNQkWMHKWZdHd#HXHKwMMNmqqmMNMNMNMMNMMMNMNMMM
// ++1V:~~~~(dHgmggmgMHHHkHgmgmmgmmmmmmmgmmHkWdXXkZUXw+>?dKdMHH@HMMMkkkkkMNHNMMMMMNMN##NNMMHH(wkXVWZVkffHWMMNMM8=VWbbbWWHffWbWkqH@H@@@@@MHNMMMMMMMN@MMNMMHkbbMMkkH@MNHWHVWWMNHKW0dMNMgmqmmMNMNMNMMNMNMNMNNM
// Q@<~~~~(dHgggmmHHM@H@MHHmmmmgmmggmggmmmmmHXNWHXXOwkn<udMp4M@H@HMMNkkHHMMNHHHNMMMWMMMMMMMM3VdWggHbbkMNkuXSX0zOxz=zTTVWyVVWHgHHMMHMNMMMMMMNMMNMNNMMNMMMNbbkHMkkHMMMMWMNfyMMVWHSdMMMMHmmmmMMNMMNNMNMNMMNMMN
// <~~~~(dmgggmmgHHHmmgmH@HHmgmmmgmmmgmmmgggmNWRWHXRWwwHbbWNyHHHH@MMMMMkHHMNMMMHMMMNMNMMNNHDJrHmmgmHHHHHVWWyzXkwXwXGJwXWWHMgMMHHMMNMMMMNMNMMMMMMM@gggHMMHHkHMHMMM@MgHMMHWyyyWHSdMNNMNgmHqmMMMNMNMMMNMNMMNMM
// ~~~(dmmmmmmmmgHHmggmmmgHHgmmggmgmmmmgggKZWvWHRSvRZkXdMNMMNdMH@HHMMNqqqqHMMMMHQWMkHMNMNMF(OdWWHHgmmHmyXVWWpkZWHmXWHmHqMHHHMMMMNMMMMMMHmmmHHHWW@ggg@ggHHbWMMHHWgHgHWHHMWHHWHSdMMMNMNmqqmqMMNMNMNNMMNMNMNMM
// J&HmggmmmmgmgmHHHmmgggHgggmgmmmmmggmm8OzdHgMKHHd#RXdyH@@MMkHMH@@MMMHqqqqMNWmmmggHNMMMMD(w3(llXHHH0vWWHWgggHqkyWHHHHHHHqMMMMMMmmHYkI<dHqHmdWkqHggMMgggHbHMHkWMHMgWHkMHKWKHSdM@@MMMMHHmmmMMMNMNMNMNMNMNMNN
// HMMNHmgggmmmgmgHHkqHHkHHgmmmgmggmmgmHWkHgggmHXHWWNdwWW@MMHNdMHHHmJ?THqqqMNmHNMMHHMMMM5XXX-(lldWNNmkWWqMggggHHWfVWWkXHHHHyHHqHHVVXXkHHd@@HHHH@@MMHHHHHMWHgHpHmMHHWWMHgHH#udM@ggMMNMmmmmmMNNMMMNMNMNMMNMMM
// HmgMMNNgmgmmmmmggmgHggmggmgmgmmgHHHYTTWHHgqqqHkHWkkRWfHgggMyMMHpWHkJdqqqMNHMWVfWqHMMFzzXWsOudHMHMgggHHgggggggHVyyyXVCOwwZAzXwXWWHHgggNH@MMMHHHHHHH#H##HMmqMMNNHHWHHHWW8QH@@gggMNMgmmmmmMMNMNMMNMMNMNMNMN
// NNMNMNMMHggggmmmmmmgmmgmmmmgmgmHHUw+zwXWHWHqqqHHHHHWXfWMMMMk@MHHz1Xk(WmgMNNKyZWMMNN#(wwdHpHHHpWMggggmgmggHHHHVVyV=_.-JwZXXXkHH@@@@MNMHHMMHHHMMMMMMMM##MkHHNmMMkNHWXQHzdH@MggggMMmmmqqqmMMMNNNMNNMMNMNMMM
// MMMMMNMMNHHgmmgmmmmmmmgmgmgmmgmHHQbWXkWWkHmmmmMMNWNWWHHgggHH@MMNNHVgXXgNMMMNHRWMHNM%?(RIdWHMNkfffHggHWWHWyZkG.(&+dXXfpfWkWHgqHMHMHHHHHMMMMMMNMMMMMMMNMNHHMNgMNbHZZuzQM@@MggggHHmmqqqmmHNNMNMMNMMNMNNMNMN
// MNHMNMNMMMNHHmmgmmmmgmmmmmgmgmggkHkHHHpWHgmmmHNMMNHHkHHHHgMpMM@MNMMNHMMMMMMMNRH#MMF`.dWWVWgggHNpfffH=<1OzWHMKHWVWHHHmmmmmgmmHmHMMMMMMMMMMMNMMMMMMMMMMMkffWMHMMHWWXQMH@@@gggHHmHmqqqqmmMMNNMMNMMNMNMMNMMM
// ggMHMMMNNMMMNHHmmgmmmmmgmmmmmHWXZHQQWWHmmmgmmHMMMMNNkWHHHHNWWMMMHWHHMMMMHMHHMNkNN@``,SwXWggggHHffHHKo-(rtIdHgHXkfM@@gmmmmmgggHHgMMMMMMMMMHHMgmgmHHk@g@gHHWMMNNHQHMH@@M@gggHHmmmHmmqqmmMMMNMNNMNNMMNMMNMN
// gggHHgMMMNMNMNNMHgmmgmmmgmgmgmdWWHgmgmmmmmmmgMMNNMM#zUWHHHHWW8XWVWMMMHMWNHH@@@MMM~`.jdyWHgggmpWHkkpRtrrrtXXMgg@NpW@@HgmmgmmggHH@mH@ggggggHHHUHHHHHHM@@@@gNyMMMNNMMMgg@ggHHqqmgmmmmmmmMNMNMMNMNMNMNNMNNMM
// mggggMHMMMMMMMMNHHgmmgmmmmmmgmmmmmmmmmmgmggNMMMMMNM#vvvvvvXHkyzZjkqqqqHUWH@@@@@N'`.kwXfWgggmgWpHggMqHsrAdWMMg@@NbH@HHmggggmgggHHHgg@@HHkkHWWWWgggH@@MMMNNMKdMNNMMgmH@gH@mmqqmmmmmmmmmMMNMNMMNMMMNMMNMMMM
// mmmmmgHHmMNNMNMMNNMHmmmmmmgmHHHggmmmmmmgHMMMNMMNNMMNmwvvvvvzXWHkdkqkkkqKWH@@@MH$`.dWkpkgggmggHpWgg@HqHHHHpWMgHMkHH@MHggmHH@HgmgggMHHHqqqqqqqqHH@@MMMMMNNMMMMNMMMgmHMHHqqHqmmmmmmmmmgMNMMNMNNMNMNMNMNMMgg
// gmgmmmggNgMMMNNMMNMMHgmmgmm8XWWkWmmmmgHMMNNMNMMMMNMMMHNmvvvvkzdqHqkkbH9XkWH@@MF`.dHXHWHgggggHkW@gggg@MMMkppWWHMM@mHHHgHHM@@@MgmmHgHgggHHH@H@HMMMMMMMNNMMNNMMMHmgmHMMqqqqqmmmmmmgmmHMMMNMNMNMMNMNMMNMMggg
// HNNHHHHHHMNMMMNMNMMMNMmmmgHsWz1dWmggmNMMMMMNMNMNMMNMM@@@MHmX77vWgNmHY:+wXkWHH#_.OwXpWgggggmHWgggggg@@HgHqHkP~(zwWHM@HHHHHH@H@MHmHHgggMHMNMMMMMNN#MNMMMMMMMMggmmHMHmqqqkmmmmmmmmHgHHMMNMNMMNMNMNMNMMMggmm
// MMMMMMNMMMMMMNMMMNMNNNHHmggHHHHHHmmmNMNNMNMMNMNMNMMMHHHHHH#~(+dgHHWn++jwXWHHMt JOdqWH@ggggHWggggg@@ggggHkHM0+(trtHWM@@NHgH@@HgHggHggHMMNMMNNNMMMMNMMMNMMMgggHHMqqqqqkqqHggmmmggH@gMMMNMMNMNMMNMMMMgggmgg
// MMNMNMMNMNMMMMMMMMMMMMMHgmmmmmmmmgmMMMNMNMNMNMMNMNMMqqqqkkD(dMNXXAay++wQkWyV5+JzdHHqqHHHHWWgggggggg@HgHH@MNRtrrtwHHM@@MHg@H@H@HHMMMHMMNMMNMMNMNNMMNNMNMMgHHM@@gqqkkqqqqHggmgmHggHMMNMMNNMNMNMMMMgmgmmgmm
// MMMMMmggHNNNNMHMMMMMMMMMMmmgmgmmgmHMMNMMMNMNMNMMMNMH@HHkkqH+HmHHHHW$jdHHWSwwXXmQdNHHHHkkHWgggggggggHHH@@@@@HHQAdHMHM@MWgH@@@MHNMMNMMMMNMNMNNMMMNMNMMNMMH@@@@@HqkqkqmqqHmgmgHHgmMMMNMNMMNMMNMMMgmmggmmgmm
// mmHHNHMMMMgmmmmmmmmmggggMBWWHmmmggMMNMMNMMNMMMNMMMMM@@@HHHqWWHKWHHWWWHWWSZXHHpfpfpWHgggHH@@gggggggHH@@gggg@@HHMHWkbWHgN@@@@HgNMMNMMMMNMMNMMMNMNMMMNMMHH@H@@HqkqqkqHqmHgggHHmgmNMMMMNMMNMMNMMmmmmmmmgmmgg
// MNNNHggmmgmmmmgmmgmgmggg@j0ZUMgggMMMMNNMNMMNMNMNNMNM@#=(JM@HMb#yWMWNNWfWkWHNWHHHHHHWHHHgmH@@@@g@HH@@gg@@g@@@MMMMHHHkkbH@@MMHNNNMMMMMNMMNMMNMMNMMNMMNMMNMMMNNqqqqqqmmHgggMmmmmMMNMNMNMNMMMggmmmmmgmmmmmgg
// MMMMHNNNMNMMMMMMMNNggmmgHHHkWMggMMNMMNMMMNMMNMMMMNMMM+zQwZMMHMZyWMHMfWWWHHHWNppHVWWVHWfHHmH@@@HqH@@g@@g@@@gHqgggmHMMHHHkqMmHMMMMMMNMMMMMMNMNMMNMNNMMNMMNNM@@ggggmggHHHHmmmggMMMMNMNMNMMgmmggmggmggmgggmg