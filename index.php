<!DOCTYPE html>
<html lang="de">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SpookTube</title>
        <link rel="Stylesheet" href="styles.css">
    </head>
    <body>
        <h1>PHP Video Loader</h1>
        <?php
            include './video.php';
            $a = [new youtube('Full HP Ahri.exe', 'https://www.youtube.com/embed/Xz-GkFRK-BY?si=h9tKZLcSBDcDa2rg'), new youtube('Top 5 Scariest Jumpscare', 'https://www.youtube.com/embed/i-01U8BW7vg?si=poRxfWHSS9RO82fa'), new youtube('1 hour of silence occasionally interrupted by Pikmin', 'https://www.youtube.com/embed/a56T2llZf_k?si=tPecktHdUpUUJGF1'), new youtube('Qualifying Highlights / 2024 Singapore Grand Prix', 'https://www.youtube.com/embed/JlTxsuYY2VY?si=ucAE1PlVoIeqvoBQ'), new youtube('meine neue ENTSCHULDIGUNG an APORED 12', 'https://www.youtube.com/embed/NsZmJtAvqBE?si=HeEoxiHET7x7dqL_')];
            $b = [new vimeo('Red Wine', 'https://player.vimeo.com/video/1004087384?badge=0&amp'), new vimeo('The Doll', 'https://player.vimeo.com/video/780891534?badge=0&amp'), new vimeo('All Gucci My Broski', 'https://player.vimeo.com/video/999408349?badge=0&amp'), new vimeo('Hot Mother','https://player.vimeo.com/video/756746901?badge=0&amp'), new vimeo('Bad Omens', 'https://player.vimeo.com/video/1010606796?badge=0&amp')];
            foreach($b as $vid){
                echo $vid->getHTMLCode();
            }
            foreach($a as $vid){
                echo $vid->getHTMLCode();
            }
        ?>
        <h1>Statische Website</h1>
        <figure>
            <figcaption>Youtube | Full HP Ahri.exe</figcaption>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/Xz-GkFRK-BY?si=h9tKZLcSBDcDa2rg" title="Youtube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe><br>
        </figure>

        <figure>
            <figcaption>Youtube | Top 5 Scariest Jumpscare</figcaption>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/i-01U8BW7vg?si=poRxfWHSS9RO82fa" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe><br>
        </figure>

        <figure>
            <figcaption>Youtube | 1 hour of silence occasionally interrupted by Pikmin</figcaption>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/a56T2llZf_k?si=tPecktHdUpUUJGF1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe><br>
        </figure>

        <figure>
            <figcaption>Youtube | Qualifying Highlights / 2024 Singapore Grand Prix </figcaption>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/JlTxsuYY2VY?si=ucAE1PlVoIeqvoBQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe><br>
        </figure>

        <figure>
            <figcaption>Youtube | meine neue ENTSCHULDIGUNG an APORED 12 </figcaption>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/NsZmJtAvqBE?si=HeEoxiHET7x7dqL_" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe><br>
        </figure>

        <figure>
            <figcaption>Youtube | T1 FAKER "UNKILLABLE DEMON KING" MONTAGE </figcaption>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/TCiS2QHr6ks?si=NLiUwlYHz-gplF1O" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe><br>
        </figure>

        <figure>
            <figcaption>Youtube | If Squidward Got Everything He EVER Wanted </figcaption>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/w8BG-41Ahm0?si=wE9xXHHdfv2s_hJX" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe><br>
        </figure>

        <figure>
            <figcaption>Youtube | 100 hours of shreksophone</figcaption>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/vXYVfk7agqU?si=63F23LLsJZvnkYCl" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe><br>
        </figure>

        <figure>
            <figcaption>Youtube | Nikita Mazepin annoying EVERY DRIVER feat. Netflix DTS </figcaption>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/jKJwPa5Szus?si=wmVZ69KLOUDLJUuq" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe><br>
        </figure>

        <figure>
            <figcaption>Youtube | Spongebob Zitate, die ich täglich in meinem Leben benutze</figcaption>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/gZPbIjMBrMk?si=-pW1woV6FDh1g8nN" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe><br>
        </figure>

        <figure>
            <figcaption>Youtube | Fish Spinning to Funky Town Extended for 10 hours </figcaption>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/6_hl8AB7Uf0?si=1omh8OYQ_TK9VA9J" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe><br>
        </figure>

        <figure>
            <figcaption>Youtube | Eduard Schäfer | Fenerbahçe fan ! </figcaption>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/NHr8TpJtaPo?si=09zFPsmjPQNF62yS" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe><br>
        </figure>

        <figure>
            <figcaption>Youtube |  "Sleep Paralysis" (360° Horror Film) </figcaption>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/xYq91I5STA0?si=ElZvYjSHZMlAM4TY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe><br>
        </figure>

        <figure>
            <figcaption>Youtube | Pinky und die Bienen GANZE FOLGE 6 | Micky Maus: Spielhaus</figcaption>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/Wyye9LpLcFU?si=PI3i7jtbK0k5_NJf" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe><br>
        </figure>

        <figure>
            <figcaption>Youtube | Schalke DFB-Pokal !!!!!!!!!!YEAH!! </figcaption>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/Uuva8lUUzEo?si=5bp-ImKBjIHfNfTq" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe><br>
        </figure>

        <figure>
            <figcaption>Youtube | Bayern-Tornado fegt über Barca hinweg: FC Barcelona - FC Bayern 2:8 | UEFA Champions League | DAZN </figcaption>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/DB2ux6Ca4UA?si=e8lLlfB1kiGkUDrl" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe><br>
        </figure>

        <figure>
            <figcaption>Youtube | Racism Lore</figcaption>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/TimKU5bAEDQ?si=wr3GXgHo5tJDoayN" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe><br>
        </figure>

        <figure>
            <figcaption>Youtube | Nothing is better than Gumball out of Context </figcaption>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/tqeMkEGwolA?si=9Un27Lzg1SxKok2n" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe><br>
        </figure>

        <figure>
            <figcaption>Youtube | Melendi - Barbie de Extrarradio (Speed Up + Reverb)</figcaption>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/m-JA83K_F8A?si=0WbexdF_PU34Uh0E" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe><br>
        </figure>

        <figure>
            <figcaption>Youtube | SM64: Mario Don't Save Her</figcaption>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/263aPdxHv5I?si=Y2P4VRx00vDVZFWd" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe><br>
        </figure>

        <figure>
            <figcaption>Youtube | [4K] One Rat Spinning to the Free Bird Solo 10 HOURS (FIXED)</figcaption>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/tvkxupwbFLk?si=Ee-W93EaxoiiRaUO" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe><br>
        </figure><br>
    </body>
</html>

