<?php
	session_start();
	
	spl_autoload_register(function ($class) 
	{
		 require_once $class . '.php';
	});
	$db = new DB();
	$user = new User();
	 
	if(isset($_SESSION['logged_in'])) 
	{
		//echo "user logged in";		
	} 
?>

<!DOCTYPE html>
<html>
<head>
<title> OtakuWorld </title>
<link rel="stylesheet" type="text/css" href="mystyle.css">
</head>

<body link="white"  vlink="white">
<div id="wrapper">

<fieldset class="menu">
<ul id="drop-nav">
<li ><a class="menu" href="index.php"> Home </a> </li>
<li ><a class="menu" href="#"> A&M 101</a>
<ul>
<li><a class="menu" href="page-A&M101-Manga.php"> Manga</a></li>
<li><a class="menu" href="page-A&M101-Anime.php"> Anime</a> </li>
<li><a class="menu" href="page-A&M101-Genres.php"> Genres </a></li>
</ul>
</li>
<li ><a class="menu" href="page-news.php"> News</a></li>
<li><a class="menu" href="page-shop.php"> Shop </a></li> 
</ul>
</fieldset>
<?php
if(isset($_SESSION['logged_in'])) 
	{
		//echo "user logged in";		
		echo '</p> <ul class="abc"><li><a class="cba" href="cart.php">&nbsp Cart</a></li><li>/</li><li><a class="cba" href="logout.php">Logout &nbsp</a></li>
		</ul>';
	} 
	else
		echo '

<br>
<ul class="abc"><li><a class="cba" href="page-signup.php" >Sign up </a></li><li>/</li><li><a class="cba" href="page-login.php" >Login</a></li></ul>'
?>
<div id="blspace"></div>

<fieldset>
<br>
<div id="contentbox">
<h1 class="bigger"> Manga <img src="./Images/tumblr_static_f1fmqm5ryn4kk088sok0wc8w8.png"></h1>
<p><img src="./Images/275px-Manga_in_Jp.svg.png" align="right" style="margin-left: 9px"<b>Manga</b>  are comics created in Japan, or by Japanese creators in the Japanese language, conforming to a style developed in Japan in the late 19th century. They have a long and complex pre-history in earlier Japanese art.<br>
<br>
In Japan, people of all ages read manga. The medium includes works in a broad range of genres: action-adventure, romance, sports and games, historical drama, comedy, science fiction and fantasy, mystery, suspense, detective, horror, sexuality, and 
business/commerce, among others. Although this form of entertainment originated in Japan, many mangas are translated into other languages-- mainly English. Since the 1950s, manga has steadily become a major part of the Japanese publishing industry, 
representing a ¥406 billion market in Japan in 2007 (approximately $3.6 billion) and ¥420 billion ($5.5 billion) in 2009. Manga have also gained a significant worldwide audience. In Europe and the Middle East the market is worth $250 million. 
In 2008, in the U.S. and Canada, the manga market was valued at $175 million. The markets in France and the United States are about the same size. Manga stories are typically printed in black-and-white, although some full-color manga exist (e.g. Colorful). 
In Japan, manga are usually serialized in large manga magazines, often containing many stories, each presented in a single episode to be continued in the next issue. If the series is successful, collected chapters may be republished in tankōbon volumes, 
frequently but not exclusively, paperback books. A manga artist (mangaka in Japanese) typically works with a few assistants in a small studio and is associated with a creative editor from a commercial publishing company. If a manga series is popular 
enough, it may be animated after or even during its run. Sometimes manga are drawn centering on previously existing live-action or animated films. <br>
<br>
The term manga  is a Japanese word referring both to comics and cartooning. "Manga" as a term used outside Japan refers specifically 
to comics originally published in Japan.<br>
<br>
Manga-influenced comics, among original works, exist in other parts of the world, particularly in China, Hong Kong, and Taiwan ("manhua"), and South Korea ("manhwa"). In France, "manfra" and "la nouvelle manga" have developed as forms of bande dessinée comics 
drawn in styles influenced by manga. There are also OEL manga in America too.</p>
<p>&nbsp&nbsp <b>Contents <b><br> 
<br>
<a href="#1">1 Etymology<br>
<a href="#2">2 History and characteristics<br>
<a href="#3">3 Publications<br>
<a href="#4">&nbsp&nbsp3.1 Magazines<br>
<a href="#5">&nbsp&nbsp3.2 Collected volumes<br>
<a href="#6">&nbsp&nbsp&nbsp&nbsp3.2.1 History<br>
<a href="#7">&nbsp&nbsp3.3 Dojinshi<br>
<a href="#8">4 International markets<br>
<a href="#9">&nbsp&nbsp4.1 United States<br>
<a href="#10">&nbsp&nbsp4.2 Europe<br>
<a href="#11">5 Localized manga<br>
<a href="#12">6 Awards<br>
<a href="#13">7 University education<br></p>

<h2 align="center"><a id="1">Etymology</a></h2>
<p>The kanji that are used to write the word manga in Japanese can be translated as "whimsical drawings" or "impromptu sketches." Originally an 18th-century Chinese literati term, the word first came into common usage in Japan in the late 18th 
century with the publication of such works as Santō Kyōden's picturebook Shiji no yukikai (1798), and in the early 19th century with such works as Aikawa Minwa's Manga hyakujo (1814) and the celebrated Hokusai Manga books (1814–1834) containing 
assorted drawings from the sketchbooks of the famous ukiyo-e artist Hokusai. Rakuten Kitazawa (1876–1955) first used the word "manga" in the modern sense.<br>
<br>
In Japanese, "manga" refers to all kinds of cartooning, comics, and animation. Among English speakers, "manga" has the stricter meaning of "Japanese comics", in parallel to the usage of "anime" in and outside of Japan. The term "ani-manga" is used 
to describe comics produced from animation cels.</p>

<h2 align="center"><a id="2">History and characteristics</a></h2>
<p><img src="./Images/220px-Sazae-san_kamishibai.jpg" align="left" style="margin-right: 9px"> Modern manga originated in the Occupation (1945–1952) and post-Occupation years (1952–early 1960s), while a previously militaristic and ultra-nationalist Japan rebuilt its political and economic infrastructure.<br>
<br>
Writers on manga history have described two broad and complementary processes shaping modern manga. One view emphasizes events occurring during and after the U.S. Occupation of Japan (1945–1952), and stresses U.S. cultural influences, including U.S. comics 
(brought to Japan by the GIs) and images and themes from U.S. television, film, and cartoons (especially Disney). The other view, represented by other writers such as Frederik L. Schodt, Kinko Ito, and Adam L. Kern, stress continuity of Japanese cultural
 and aesthetic traditions, including pre-war, Meiji, and pre-Meiji culture and art.<br>
 <br>
 Regardless of its source, an explosion of artistic creativity certainly occurred in the post-war period, involving manga artists such as Osamu Tezuka (Astro Boy) and Machiko Hasegawa (Sazae-san). Astro Boy quickly became (and remains) immensely popular 
 in Japan and elsewhere, and the anime adaptation of Sazae-san drawing more viewers than any other anime on Japanese television in 2011 .[citation needed] Tezuka and Hasegawa both made stylistic innovations. In Tezuka's "cinematographic" technique, the panels
 are like a motion picture that reveals details of action bordering on slow motion as well as rapid zooms from distance to close-up shots. This kind of visual dynamism was widely adopted by later manga artists. Hasegawa's focus on daily life and on women's 
 experience also came to characterize later shōjo manga. Between 1950 and 1969, an increasingly large readership for manga emerged in Japan with the solidification of its two main marketing genres, shōnen manga aimed at boys and shōjo manga aimed at girls.<br>
 <br>
 <img src="./Images/220px-Figure_in_Manga_style.png" align="left" style="margin-right: 9px">
 In 1969 a group of female manga artists (later called the Year 24 Group, also known as Magnificent 24s) made their shōjo manga debut ("year 24" comes from the Japanese name for the year 1949, the birth-year of many of these artists).
 The group included Moto Hagio, Riyoko Ikeda, Yumiko Oshima, Keiko Takemiya, and Ryoko Yamagishi. Thereafter, primarily female manga artists would draw shōjo for a readership of girls and young women. In the following decades (1975–present), shōjo manga 
 continued to develop stylistically while simultaneously evolving different but overlapping subgenres. Major subgenres include romance, superheroines, and "Ladies Comics" .<br>
 <br>
 Modern shōjo manga romance features love as a major theme set into emotionally intense narratives of self-realization. With the superheroines, shōjo manga saw releases such as Pink Hanamori's Mermaid Melody Pichi Pichi Pitch Reiko Yoshida's Tokyo Mew Mew,
 And, Naoko Takeuchi's Pretty Soldier Sailor Moon, which became internationally popular in both manga and anime formats. Groups (or sentais) of girls working together have also been popular within this genre. Like Lucia, Hanon, and Rina singing together, and
 Sailor Moon, Sailor Mercury, Sailor Mars, Sailor Jupiter, and Sailor Venus working together.<br><br>
 Manga for male readers sub-divides according to the age of its intended readership: boys up to 18 years old (shōnen manga) and young men 18- to 30-years old (seinen manga); as well as by content, including action-adventure often involving male heroes,
 slapstick humor, themes of honor, and sometimes explicit sexuality. The Japanese use different kanji for two closely allied meanings of "seinen"—青年 for "youth, young man" and 成年 for "adult, majority"—the second referring to sexually overt manga 
 aimed at grown men and also called seijin ("adult" 成人) manga. Shōnen, seinen, and seijin manga share many features in common.<br><br>
 Boys and young men became some of the earliest readers of manga after World War II. From the 1950s on, shōnen manga focused on topics thought to interest the archetypal boy, including subjects like robots, space-travel, and heroic action-adventure.
 Popular themes include science fiction, technology, sports, and supernatural settings. Manga with solitary costumed superheroes like Superman, Batman, and Spider-Man generally did not become as popular.<br><br>
 The role of girls and women in manga produced for male readers has evolved considerably over time to include those featuring single pretty girls (bishōjo) such as Belldandy from Oh My Goddess!, stories where such girls and women surround the hero, 
 as in Negima and Hanaukyo Maid Team, or groups of heavily armed female warriors (sentō bishōjo)<br><br>
 With the relaxation of censorship in Japan in the 1990s, a wide variety of explicit sexual themes appeared in manga intended for male readers, and correspondingly occur in English translations. However, in 2010 the Tokyo Metropolitan Government passed a bill 
 to restrict harmful content.<br><br>
 The gekiga style of drawing—emotionally dark, often starkly realistic, sometimes very violent—focuses on the day-in, day-out grim realities of life, often drawn in gritty and unpretty fashions. Gekiga such as Sampei Shirato's 1959–1962 Chronicles of a
 Ninja's Military Accomplishments (Ninja Bugeichō) arose in the late 1950s and 1960s partly from left-wing student and working-class political activism and partly from the aesthetic dissatisfaction of young manga artists like Yoshihiro Tatsumi with existing 
 manga. </p>
 
 <h2 align="center"><a id="3">Publications</a></h2>
 <p><img src="./Images/220px-MangaStoreJapan.jpg" align="right" style="margin-left: 9px">
 In Japan, manga constituted an annual 40.6 billion yen (approximately $395 million USD) publication-industry by 2007. In 2006 sales of manga books made up for about 27% of total book-sales, and sale of manga magazines, for 20% of total magazine-sales.
 Recently, the manga industry has expanded worldwide, where distribution companies license and reprint manga into their native languages.<br><br>
Marketeers primarily classify manga by the age and gender of the target readership. In particular, books and magazines sold to boys (shōnen) and girls (shōjo) have distinctive cover-art, and most bookstores place them on different shelves.
 Due to cross-readership, consumer response is not limited by demographics. For example, male readers may subscribe to a series intended for female readers, and so on.<br><br>
Japan has manga cafes, or manga kissa (kissa is an abbreviation of kissaten). At a manga kissa, people drink coffee, read manga and sometimes stay overnight.<br><br>
There has been an increase[quantify] in the amount of publications of original webmanga. It is internationally drawn by enthusiasts of all levels of experience, and is intended for online viewing. It can be ordered in graphic-novel form if available in print.<br><br>
The Kyoto International Manga Museum maintains a very large website listing manga published in Japanese.</p>

<h3 align="center"><a id="4">Magazines</a></h3>
<p><img src="./Images/Eshibun_Nipponchi.jpg" align="right" style="margin-left: 9px">
Manga magazines usually have many series running concurrently with approximately 20–40 pages allocated to each series per issue. Other magazines such as the anime fandom magazine Newtype featured single chapters within their monthly periodicals. 
Other magazines like Nakayoshi feature many stories written by many different artists; these magazines, or "anthology magazines", as they are also known (colloquially "phone books"), are usually printed on low-quality newsprint and can be anywhere
 from 200 to more than 850 pages thick. Manga magazines also contain one-shot comics and various four-panel yonkoma (equivalent to comic strips). Manga series can run for many years if they are successful. Manga artists sometimes start out with a few 
 "one-shot" manga projects just to try to get their name out. If these are successful and receive good reviews, they are continued. Magazines often have a short life.</p>
 
 <h3 align="center"><a id="5">Collected volumes</a></h3>
 <p>After a series has run for a while, publishers often collect the episodes together and print them in dedicated book-sized volumes, called tankōbon. These can be hardcover, or more usually softcover books, and are the equivalent of U.S. trade paperbacks
 or graphic novels. These volumes often use higher-quality paper, and are useful to those who want to "catch up" with a series so they can follow it in the magazines or if they find the cost of the weeklies or monthlies to be prohibitive. Recently, "deluxe" 
 versions have also been printed as readers have gotten older and the need for something special grew. Old manga have also been reprinted using somewhat lesser quality paper and sold for 100 yen (about $1 U.S. dollar) each to compete with the used book market.</p>
 
 <h4 align="center"><a id="6">History</a></h4>
 <p>Kanagaki Robun and Kawanabe Kyosai created the first manga magazine in 1874: Eshinbun Nipponchi. The magazine was heavily influenced by Japan Punch, founded in 1862 by Charles Wirgman, a British cartoonist. Eshinbun Nipponchi had a very simple style of 
 drawings and did not become popular with many people. Eshinbun Nipponchi ended after three issues. The magazine Kisho Shimbun in 1875 was inspired by Eshinbun Nipponchi, which was followed by Marumaru Chinbun in 1877, and then Garakuta Chinpo in 1879.
 Shōnen Sekai was the first shōnen magazine created in 1895 by Iwaya Sazanami, a famous writer of Japanese children's literature back then. Shōnen Sekai had a strong focus on the First Sino-Japanese War.<br><br>
In 1905 the manga-magazine publishing boom started with the Russo-Japanese War, Tokyo Pakku was created and became a huge hit.[54] After Tokyo Pakku in 1905, a female version of Shōnen Sekai was created and named Shōjo Sekai, considered the first shōjo
 magazine. Shōnen Pakku was made and is considered the first children's manga magazine. The children's demographic was in an early stage of development in the Meiji period. Shōnen Pakku was influenced from foreign children's magazines such as Puck which an 
 employee of Jitsugyō no Nihon (publisher of the magazine) saw and decided to emulate. In 1924, Kodomo Pakku was launched as another children's manga magazine after Shōnen Pakku. During the boom, Poten (derived from the French "potin") was published in 1908.
 All the pages were in full color with influences from Tokyo Pakku and Osaka Puck. It is unknown if there were any more issues besides the first one. Kodomo Pakku was launched May 1924 by Tokyosha and featured high-quality art by many members of the manga 
 artistry like Takei Takeo, Takehisa Yumeji and Aso Yutaka. Some of the manga featured speech balloons, where other manga from the previous eras did not use speech balloons and were silent.<br><br>
Published from May 1935 to January 1941, Manga no Kuni coincided with the period of the Second Sino-Japanese War (1937–1945). Manga no Kuni featured information on becoming a mangaka and on other comics industries around the world. Manga no Kuni handed its 
title to Sashie Manga Kenkyū in August 1940.</p>

<h3 align="center"><a id="7">Dojinshi</a></h3>
<p>Dōjinshi, produced by small publishers outside of the mainstream commercial market, resemble in their publishing small-press independently published comic books in the United States. Comiket, the largest comic book convention in the world with around 
500,000 visitors gathering over three days, is devoted to dōjinshi. While they most often contain original stories, many are parodies of or include characters from popular manga and anime series. Some dōjinshi continue with a series' story or write an entirely 
new one using its characters, much like fan fiction. In 2007, dōjinshi sold for 27.73 billion yen (245 million USD). In 2006 they represented about a tenth of manga books and magazines sales.</p>

<h2 align="center"><a id="8">International markets</a></h2>
<p>By 2007 the influence of manga on international comics had grown considerably over the past two decades. "Influence" is used here to refer to effects on the comics markets outside of Japan and to aesthetic effects on comics artists internationally.<br>
<img src="./Images/150px-Manga_reading_direction.svg.png" align="right" style="margin-left: 9px">
Traditionally, manga stories flow from top to bottom and from right to left. Some publishers of translated manga keep to this original format. Other publishers mirror the pages horizontally before printing the translation, changing the reading direction 
to a more "Western" left to right, so as not to confuse foreign readers or traditional comics-consumers. This practice is known as "flipping". For the most part, criticism suggests that flipping goes against the original intentions of the creator (for example, 
if a person wears a shirt that reads "MAY" on it, and gets flipped, then the word is altered to "YAM"), who may be ignorant of how awkward it is to read comics when the eyes must flow through the pages and text in opposite directions, resulting in an 
experience that's quite distinct from reading something that flows homogeneously. If the translation is not adapted to the flipped artwork carefully enough it is also possible for the text to go against the picture, such as a person referring to something 
on their left in the text while pointing to their right in the graphic. Characters shown writing with their right hands, the majority of them, would become left-handed when a series is flipped. Flipping may also cause oddities with familiar asymmetrical 
objects or layouts, such as a car being depicted with the gas pedal on the left and the brake on the right, or a shirt with the buttons on the wrong side, but these issues are minor when compared to the unnatural reading flow, and some of them could be solved 
with an adaptation work that goes beyond just translation and blind flipping.</p>

<h3 align="center"><a id="9">United States</a></h3>
<p>Manga made their way only gradually into U.S. markets, first in association with anime and then independently. Some U.S. fans became aware of manga in the 1970s and early 1980s. However, anime was initially more accessible than manga to U.S. fans,
 many of whom were college-age young people who found it easier to obtain, subtitle, and exhibit video tapes of anime than translate, reproduce, and distribute tankōbon-style manga books. One of the first manga translated into English and marketed in the U.S. 
 was Keiji Nakazawa's Barefoot Gen, an autobiographical story of the atomic bombing of Hiroshima issued by Leonard Rifas and Educomics (1980–1982).[64] More manga were translated between the mid-1980s and 1990s, including Golgo 13 in 1986, Lone Wolf and Cub 
 from First Comics in 1987, and Kamui, Area 88, and Mai the Psychic Girl, also in 1987 and all from Viz Media-Eclipse Comics. Others soon followed, including Akira from Marvel Comics' Epic Comics imprint and Appleseed from Eclipse Comics in 1988, and later 
 Iczer-1 (Antarctic Press, 1994) and Ippongi Bang's F-111 Bandit (Antarctic Press, 1995).<br><br>
In the 1980s to the mid-1990s, Japanese animation, like Akira, Dragon Ball, Neon Genesis Evangelion, and Pokémon, made a bigger impact on the fan experience and in the market than manga. Matters changed when translator-entrepreneur Toren Smith founded Studio
 Proteus in 1986. Smith and Studio Proteus acted as an agent and translator of many Japanese manga, including Masamune Shirow's Appleseed and Kōsuke Fujishima's Oh My Goddess!, for Dark Horse and Eros Comix, eliminating the need for these publishers to seek 
 their own contacts in Japan. Simultaneously, the Japanese publisher Shogakukan opened a U.S. market initiative with their U.S. subsidiary Viz, enabling Viz to draw directly on Shogakukan's catalogue and translation skills.<br><br>
 <img src="./Images/220px-Young_boy_reading_manga.jpg" align="left" style="margin-right: 9px">
 Japanese publishers began pursuing a U.S. market in the mid-1990s due to a stagnation in the domestic market for manga. The U.S. manga market took an upturn with mid-1990s anime and manga versions of Masamune Shirow's Ghost in the Shell (translated by Frederik
 L. Schodt and Toren Smith) becoming very popular among fans. An extremely successful manga and anime translated and dubbed in English in the mid-1990s was Sailor Moon. By 1995–1998, the Sailor Moon manga had been exported to over 23 countries, including China,
 Brazil, Mexico, Australia, North America and most of Europe. In 1997, Mixx Entertainment began publishing Sailor Moon, along with CLAMP's Magic Knight Rayearth, Hitoshi Iwaaki's Parasyte and Tsutomu Takahashi's Ice Blade in the monthly manga magazine MixxZine.
 Two years later, MixxZine was renamed to Tokyopop before discontinuing in 2011. Mixx Entertainment, later renamed Tokyopop, also published manga in trade paperbacks and, like Viz, began aggressive marketing of manga to both young male and young female 
 demographics.<br><br>
In the following years, manga became increasingly popular, and new publishers entered the field while the established publishers greatly expanded their catalogues. and by 2008, the U.S. and Canadian manga market generated $175 million in annual sales.
 Simultaneously, mainstream U.S. media began to discuss manga, with articles in The New York Times, Time magazine, The Wall Street Journal, and Wired magazine.</p>

<h3 align="center"><a id="10">Europe</a></h3> 
<p>Manga has influenced European cartooning in a way that is somewhat different from in the U.S.. Broadcast anime in Italy and France opened the European market to manga during the 1970s. French art has borrowed from Japan since the 19th century (Japonisme),
 and has its own highly developed tradition of bande dessinée cartooning. In France, beginning in the mid-1990s, manga has proven very popular to a wide readership, accounting for about one-third of comics sales in France since 2004. According to the Japan 
 External Trade Organization, sales of manga reached $212.6 million within France and Germany alone in 2006. France represents about 50% of the European market and is the second worldwide market, behind Japan. In 2013, there were 41 publishers of manga in
 France and, together with other Asian comics, manga represented around 40% of new comics releases in the country, surpassing Franco-Belgian comics for the first time. European publishers marketing manga translated into French include Glénat, Asuka, Casterman,
 Kana, and Pika Édition, among others.<br><br>
European publishers also translate manga into German, Italian, Dutch, and other languages. In 2007, about 70% of all comics sold in Germany were manga. Manga publishers based in the United Kingdom include Gollancz and Titan Books. Manga publishers from the 
United States have a strong marketing presence in the United Kingdom: for example, the Tanoshimi line from Random House.</p>

<h2 align="center"><a id="11">Localized manga</a></h2>
<p>A number of artists in the United States have drawn comics and cartoons influenced by manga. As an early example, Vernon Grant drew manga-influenced comics while living in Japan in the late 1960s and early 1970s. Others include Frank Miller's mid-1980s 
Ronin, Adam Warren and Toren Smith's 1988 The Dirty Pair, Ben Dunn's 1987 Ninja High School and Manga Shi 2000 from Crusade Comics (1997).<br><br>
By the 21st century several U.S. manga publishers had begun to produce work by U.S. artists under the broad marketing-label of manga. In 2002 I.C. Entertainment, formerly Studio Ironcat and now out of business, launched a series of manga by U.S. artists 
called Amerimanga. In 2004 eigoMANGA launched the Rumble Pak and Sakura Pakk anthology series. Seven Seas Entertainment followed suit with World Manga. Simultaneously, TokyoPop introduced original English-language manga (OEL manga) later renamed Global Manga.<br><br>
Francophone artists have also developed their own versions of manga (manfra), like Frédéric Boilet's la nouvelle manga. Boilet has worked in France and in Japan, sometimes collaborating with Japanese artists.</p>

<h2 align="center"><a id="12">Awards</a></h2>
<p>The Japanese manga industry grants a large number of awards, mostly sponsored by publishers, with the winning prize usually including publication of the winning stories in magazines released by the sponsoring publisher. Examples of these awards include:</p>

<p>&#9830; the Akatsuka Award for humorous manga<br>
&#9830; the Dengeki Comic Grand Prix for one-shot manga<br>
&#9830; the Japan Cartoonists Association Award various categories<br>
&#9830; the Kodansha Manga Award (multiple genre awards)<br>
&#9830; the Seiun Award for best science fiction comic of the year<br>
&#9830; the Shogakukan Manga Award (multiple genres)<br>
&#9830; the Tezuka Award for best new serial manga<br>
&#9830; the Tezuka Osamu Cultural Prize (multiple genres)</p>
<p>The Japanese Ministry of Foreign Affairs has awarded the International Manga Award annually since May 2007.</p>

<h2 align="center"><a id="13">University education</a></h2>
<p>Kyoto Seika University in Japan has offered a highly competitive course in manga since 2000. Then, several established universities and vocational schools  established a training curriculum.<br><br>
Shuho Sato, who wrote Umizaru and Say Hello to Black Jack, has created some controversy on Twitter. Sato says "Manga school is meaningless because those schools have very low success rates. Then, I could teach novices required skills on the job in three months.
 Meanwhile, those school students spend several million yen, and four years, yet they are good for nothing." and that, "For instance, Keiko Takemiya, the then professor of Seika Univ., remarked in the Government Council that 'A complete novice will be able 
 to understand where is "Tachikiri" (i.e., margin section) during four years.' On the other hand, I would imagine that, It takes about thirty minutes to completely understand that at work."</p>
</div>
</fieldset>


</div>


</body>
</html>