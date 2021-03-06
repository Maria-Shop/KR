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
<body >

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
<div id="contentbox">
<h1 class="bigger">Anime <img src="./Images/Chibi-HaruhiTRANSPARENT.png"></h1>


<p>Anime are Japanese animated productions featuring hand-drawn or computer animation. The word is the abbreviated pronunciation of "animation" in Japanese, where this term references all animation. In other languages, the term is defined as animation from Japan
 or as a Japanese-disseminated animation style often characterized by colorful graphics, vibrant characters and fantastic themes. Arguably, the stylization approach to the meaning may open up the possibility of anime produced in countries other than Japan.
 For simplicity, many Westerners strictly view anime as an animation product from Japan.<br><br>
The earliest commercial Japanese animation dates to 1917, and production of anime works in Japan has since continued to increase steadily. The characteristic anime art style emerged in the 1960s with the works of Osamu Tezuka and spread internationally
 in the late twentieth century, developing a large domestic and international audience. Anime is distributed theatrically, by television broadcasts, directly to home media, and over the internet and is classified into numerous genres targeting diverse 
 broad and niche audiences.<br><br>
Anime is a diverse art form with distinctive production methods and techniques that have been adapted over time in response to emergent technologies. The production of anime focuses less on the animation of movement and more on the realism of settings as 
well as the use of camera effects, including panning, zooming and angle shots. Diverse art styles are used and character proportions and features can be quite varied, including characteristically large emotive or realistically sized eyes. <br><br>
The anime industry consists of over 430 production studios including major names like Studio Ghibli, Gainax and Toei Animation. Despite having a fraction of the domestic film market, anime achieves a majority of DVD sales and has been an international
 success after the rise of televised English dubs. This rise in international popularly has resulted in non-Japanese productions using the anime art style, but these works have been defined as anime-influenced animation by both fans and the industry.</p>

 <p>&nbsp &nbsp <b>Contents <b><br> 
<br>
<a href="#1">1 Definition and usage<br>
<a href="#2">2 Format<br>
<a href="#3">3 History<br>
<a href="#4">4 Genres<br>
<a href="#5">5 Attributes<br>
<a href="#6">&nbsp&nbsp5.1 Animation technique<br>
<a href="#7">&nbsp&nbsp5.2 Characters<br>
<a href="#8">&nbsp&nbsp5.3 Music<br>
<a href="#9">6 Industry<br>
<a href="#10">&nbsp&nbsp6.1 Awards<br>
<a href="#11">7 Influence on world culture<br>
<a href="#12">&nbsp&nbsp7.1 Fan response<br>
<a href="#13">&nbsp&nbsp7.2 Anime style<br></p>

<h2 align="center"><a id="1">Definition and usage</a></h2>
<p>Anime is an art form, specifically animation, that includes all genres found in cinema, but it can be mistakenly classified as a genre. In Japan, the term anime refers to all forms of animation from around the world. English-language dictionaries define
 anime as a "Japanese-style animated film or television entertainment" or as "a style of animation created in Japan".<br><br>
The etymology of the word anime is disputed. The English term "animation" is written in Japanese katakana as アニメーション (animēshon, pronounced [animeːɕoɴ]), and is アニメ (anime) in its shortened form. Some sources claim that anime derives from the French 
term for animation, dessin animé, but others believe this to be a myth derived from the French popularity of the medium in the late 1970s and 1980s. In English, anime, when used as a common noun, normally functions as a mass noun (for example: "Do you 
watch anime?", "How much anime have you collected?"). Prior to the widespread use of anime, the term Japanimation was prevalent throughout the 1970s and 1980s. In the mid-1980s, the term anime began to supplant Japanimation. In general, the term now only 
appears in period works where it is used to distinguish and identify Japanese animation.<br><br>
In 1987, Hayao Miyazaki stated that he despised the truncated word "Anime" because to him it represented the desolation of the Japanese animation industry. He equated the desolation with animators lacking motivation and mass-produced, overly expressive
 products which rely on fixed iconography for facial expressions and protracted and exaggerated action scenes but lack depth and sophistication because they do not attempt to convey emotion or thought.</p>
 
 <h2 align="center"><a id="2">Format</a></h2>
 <p>The first format of anime was theatrical viewing which originally began with commercial productions in 1917. Originally the animated flips were crude and required played musical components before adding sound and vocal components to the production.
 On July 14, 1958, Nippon Television aired Mole's Adventure, both the first televised and first color anime to debut. It wasn't until the 1960s when the first televised series were broadcast and it has remained a popular medium since. Works released in 
 a direct to video format are called "original video animation" (OVA) or "original animation video" (OAV); and are typically not released theatrically or televised prior to home media release. The emergence of the internet has led some animators to distribute 
 works online in a format called "original net anime" (ONA).<br><br>
The home distribution of anime releases were popularized in the 1980s with the VHS and Laser Disc formats. The VHS NTSC video format used in both Japan and the United States is credited as aiding the rising popularity of anime in the 1990s. The Laser Disc 
and VHS formats were transcended by the DVD format which offered the unique advantages; including multiple subtitling and dubbing tracks on the same disc. The DVD format also has its drawbacks in the its usage of region coding; adopted by the industry to 
solve licensing, piracy and export problems and restricted region indicated on the DVD player. The Video CD (VCD) format was popular in Hong Kong and Taiwan, but became only a minor format in the United States that was closely associated with bootleg copies.</p>

 <h2 align="center"><a id="3">History</a></h2>
 <p><img src="./Images/Anime_cell_1917.jpg" align="left" style="margin-right: 9px">
 Anime arose in the early 20th century, when Japanese film-makers experimented with the animation techniques also pioneered in France, Germany, the United States and Russia. A claim for the earliest Japanese animation is Katsudō Shashin, an undated
 and private work by an unknown creator. In 1917, the first professional and publicly displayed works began to appear. Animators such as Ōten Shimokawa and Seitarou Kitayama produced numerous works, with the oldest surviving film being Kouchi's Namakura
 Gatana, a two-minute clip of a samurai trying to test a new sword on his target only to suffer defeat. The 1923 Great Kantō earthquake resulted in widespread destruction to Japan's infrastructure and the destruction of Shimokawa's warehouse,
 destroying most of these early works.<br><br>
By the 1930s animation was well established in Japan as an alternative format to the live-action industry. It suffered competition from foreign producers and many animators, such as Noburō Ōfuji and Yasuji Murata, who still worked in cheaper cutout 
animation rather than cel animation. Other creators, such as Kenzō Masaoka and Mitsuyo Seo, nonetheless made great strides in animation technique; they benefited from the patronage of the government, which employed animators to produce educational shorts
 and propaganda. The first talkie anime was Chikara to Onna no Yo no Naka, produced by Masaoka in 1933. By 1940, numerous anime artists' organizations had risen, including the Shin Mangaha Shudan and Shin Nippon Mangaka. The first feature length animated film
 was Momotaro's Divine Sea Warriors directed by Seo in 1944 with sponsorship by the Imperial Japanese Navy.
 <img src="./Images/220px-Momotaro's_Divine_Sea_Warriors-screeny.JPG" align="right" style="margin-left: 9px">
 The success of The Walt Disney Company's 1937 feature film Snow White and the Seven Dwarfs profoundly influenced many Japanese animators. In the 1960s, manga artist and animator Osamu Tezuka adapted and simplified many Disney animation techniques to reduce
 costs and to limit the number of frames in productions. He intended this as a temporary measure to allow him to produce material on a tight schedule with inexperienced animation staff. Three Tales, aired in 1960, was the first anime shown on television. 
 The first anime television series was Otogi Manga Calendar, aired from 1961 to 1964.<br><br>
The 1970s saw a surge of growth in the popularity of manga, Japanese comic books and graphic novels, many of which were later animated. The work of Osamu Tezuka drew particular attention: he has been called a "legend"[30] and the "god of manga".
 His work – and that of other pioneers in the field – inspired characteristics and genres that remain fundamental elements of anime today. The giant robot genre (known as "mecha" outside Japan), for instance, took shape under Tezuka, developed into the 
 Super Robot genre under Go Nagai and others, and was revolutionized at the end of the decade by Yoshiyuki Tomino who developed the Real Robot genre. Robot anime like the Gundam and The Super Dimension Fortress Macross series became instant classics in the 
 1980s, and the robot genre of anime is still one of the most common in Japan and worldwide today. In the 1980s, anime became more accepted in the mainstream in Japan (although less than manga), and experienced a boom in production. Following a few successful
 adaptations of anime in overseas markets in the 1980s, anime gained increased acceptance in those markets in the 1990s and even more at the turn of the 21st century. In 2002, Spirited Away, a Studio Ghibli production directed by Hayao Miyazaki won the Golden 
 Bear at the Berlin International Film Festival and in 2003 at the 75th Academy Awards it won the Academy Award for Best Animated Feature. </p>
 
 <h2 align="center"><a id="4">Genres</a></h2>
  <p>Anime are often classified by target demographic, including kodomo (children's), shōjo (girls'), shounen (boys') and a diverse range of genres targeting an adult audience. Shoujo and shounen anime sometimes contain elements popular with children of both
  sexes in an attempt to gain crossover appeal. Adult anime may feature a slower pace or greater plot complexity that younger audiences typically find unappealing, as well as adult themes and situations. A subset of adult anime works feature pornographic 
  elements and are labeled "R18" in Japan, but internationally these works are grouped together under the term hentai (Japanese for "pervert"). By contrast, a variety of anime subgenres across demographic groups incorporate ecchi, sexual themes or undertones 
  without depictions of sexual intercourse, as typified in the comedic or harem genres; due to its popularity among adolescent and adult anime enthusiasts, incorporation of ecchi elements in anime is considered a form of fan service.<br><br>
Anime's genre classification is different from other types of animation and does not lend itself to simple identity. Gilles Poitras compared the labeling Gundam 0080 and its complex depiction of war as a "giant robot" anime akin to simply labeling War and Peace
 a "war novel". Science fiction is a major anime genre and includes important historical works like Tezuka's Astro Boy and Yokoyama's Tetsujin 28-go. A major subgenre of science fiction is mecha, with the Gundam metaseries being iconic. The diverse fantasy
 genre includes works based on Asian and Western traditions and folklore; examples include the Japanese feudal fairytale InuYasha, and the depiction of Scandinavian goddesses who move to Japan to maintain a computer called Yggdrasil in Oh My Goddess.
 Genre crossing in anime is also prevalent, such as the blend of fantasy and comedy in Dragon Half, and the incorporation of slapstick humor in the crime anime Castle of Cagliostro. Other subgenres found in anime include magical girl, harem, sports, martial 
 arts, literary adaptations, medievalism, and war.<br><br>
Genres have emerged that explore homosexual romances. While originally pornographic in terminology, yaoi (male homosexuality) and yuri (female homosexuality) are broad terms used internationally to describe any focus on the themes or development of romantic 
homosexual relationships. Prior to 2000, homosexual characters were typically used for comedic effect, but some works portrayed these characters seriously or sympathetically.</p>
  
  <h2 align="center"><a id="5">Attributes</a></h2>
   <p>Anime differs greatly from other forms of animation by its diverse art styles, methods of animation, its production, and its process. Visually, anime is a diverse art form that contains a wide variety of art styles, differing from one creator, artist,
   and studio. While no one art style predominates anime as a whole, they do share some similar attributes in terms of animation technique and character design. Any other visual variation falls under the artists as they see fit.</p>
   
  <h3 align="center"><a id="6">Animation technique</a></h3>
   <p>
   <img src="./Images/300px-Modernanime.jpg" align="right" style="margin-left: 9px">
   Anime follows the typical production of animation, including storyboarding, voice acting, character design, and cel production. Since the 1990s, animators have increasingly used computer animation to improve the efficiency of the production process.
   Artists like Noburō Ōfuji pioneered the earliest anime works, which were experimental and consisted of images drawn on blackboards, stop motion animation of paper cutouts, and silhouette animation. Cel animation grew in popularity until it came to 
   dominate the medium. In the 21st century, the use of other animation techniques is mostly limited to independent short films, including the stop motion puppet animation work produced by Tadahito Mochinaga, Kihachirō Kawamoto and Tomoyasu Murata.
   Computers were integrated into the animation process in the 1990s, with works such as Ghost in the Shell and Princess Mononoke mixing cel animation with computer-generated images. Fuji Film, a major cel production company, announced it would stop cel 
   production, producing an industry panic to procure cel imports and hastening the switch to digital processes.<br><br>
Prior to the digital era, anime was produced with traditional animation methods using a pose to pose approach. The majority of mainstream anime uses fewer expressive key frames and more in-between animation.<br><br>
Japanese animation studios were pioneers of many limited animation techniques, and have given anime a distinct set of conventions. Unlike Disney animation, where the emphasis is on the movement, anime emphasizes the art quality and let limited animation 
techniques make up for the lack of time spent on movement. Such techniques are often used not only to meet deadlines but also as artistic devices. Anime scenes place emphasis on achieving three-dimensional views, and backgrounds are instrumental in
 creating the atmosphere of the work. The backgrounds are not always invented and are occasionally based on real locations, as exemplified in Howl's Moving Castle and The Melancholy of Haruhi Suzumiya. Oppliger stated that anime is one of the rare mediums
 where putting together an all-star cast usually comes out looking "tremendously impressive".<br><br>
The cinematic effects of anime differentiates itself from the stage plays found in American animation. Anime is cinematically shot as if by camera, including panning, zooming, distance and angle shots to more complex dynamic shots that would be difficult
 to produce in reality. In anime, the animation is produced before the voice acting, contrary to American animation which does the voice acting first; this can cause lip sync errors in the Japanese version.</p>
   
  <h3 align="center"><a id="7">Characters</a></h3>
   <p>Body proportions of human anime characters tend to accurately reflect the proportions of the human body in reality. The height of the head is considered by the artist as the base unit of proportion. Head heights can vary, but most anime characters 
   are about seven to eight heads tall. Anime artists occasionally make deliberate modifications to body proportions to produce super deformed characters that feature a disproportionately small body compared to the head; many super deformed characters are 
   two to four heads tall. Some anime works like Crayon Shin-chan completely disregard these proportions, such that they resemble Western cartoons.<br><br>
A common anime character design convention is exaggerated eye size. The animation of characters with large eyes in anime can be traced back to Osamu Tezuka, who was deeply influenced by such early animation characters as Betty Boop, who was drawn with 
disproportionately large eyes. Tezuka is a central figure in anime and manga history, whose iconic art style and character designs allowed for the entire range of human emotions to be depicted solely through the eyes. The artist adds variable color shading 
to the eyes and particularly to the cornea to give them greater depth. Generally, a mixture of a light shade, the tone color, and a dark shade is used. Cultural anthropologist Matt Thorn argues that Japanese animators and audiences do not perceive such 
stylized eyes as inherently more or less foreign. However, not all anime have large eyes. For example, the works of Hayao Miyazaki are known for having realistically proportioned eyes, as well as realistic hair colors on their characters.<br><br>
Hair in anime is often unnaturally lively and colorful or uniquely styled. The movement of hair in anime is exaggerated and "hair action" is used to emphasize the action and emotions of characters for added visual effect. Poitras traces hairstyle color 
to cover illustrations on manga, where eye-catching artwork and colorful tones are attractive for children's manga. Despite being produced for a domestic market, anime features characters whose race or nationality is not always defined, and this is often 
a deliberate decision, such as in the Pokémon animated series.<br><br>
Anime and manga artists often draw from a common canon of iconic facial expression illustrations to denote particular moods and thoughts. These techniques are often different in form than their counterparts in Western animation, and they include a fixed 
iconography that is used as shorthand for certain emotions and moods. These expression are often exaggerated and are typically comedic in nature. For example, a male character may develop a nosebleed when aroused, stemming from a Japanese old wives' tale.
 A variety of visual symbols are employed, including sweatdrops to depict nervousness, visible blushing for embarrassment, or glowing eyes for an intense glare.
 <img src="./Images/800px-Manga_emotions-EN.jpg" align="middle" style="margin-top: 9px" style="margin-bottom: 9px"></p>
   
  <h3 align="center"><a id="8">Music</a></h3>
   <p>The opening and credits sequences of most anime television episodes are accompanied by Japanese pop or rock songs, often by reputed bands. They may be written with the series in mind, but are also aimed at the general music market, and therefore often 
   allude only vaguely or not at all to the themes or plot of the series. Pop and rock songs are also sometimes used as incidental music ("insert songs") in an episode, often to highlight particularly important scenes. More often than not, background music
   is employed as an added flavor to series either to drive story plot lines or to simply to decorate particular scenes and animated sequences. Furthermore, some series offer all applied music available in the form of OST, or original soundtracks.</p>
   
  <h2 align="center"><a id="9">Industry</a></h2>
   <p>The animation industry consists of more than 430 production companies with some of the major studios including Toei Animation, Gainax, Madhouse, Gonzo, Sunrise, Bones, TMS Entertainment, Nippon Animation, Studio Pierrot and Studio Ghibli.
   Many of the studios are organized into a trade association, The Association of Japanese Animations. There is also a labor union for workers in the industry, the Japanese Animation Creators Association. Studios will often work together to produce
   more complex and costly projects, as done with Studio Ghibli's Spirited Away. An anime episode can cost between US$100,000 and US$300,000 to produce. In 2001, animation accounted for 7% of the Japanese film market, above the 4.6% market share for 
   live-action works.[56]:17 The popularity and success of anime is seen through the profitability of the DVD market, contributing nearly 70% of total sales. Spirited Away (2001) is the highest-grossing anime film, with US$274,925,095.<br><br>
The anime market for the United States was worth approximately $2.74 billion in 2009. Dubbed animation began airing in the United States in 2000 on networks like The WB and Cartoon Network's Adult Swim. In 2005, this resulted in five of the top ten anime 
titles having previously aired on Cartoon Network. As a part of localization, some editing of cultural references may occur to better follow the references of the non-Japanese culture. The cost of English localization averages US $10,000 per episode.<br><br>
The industry has been subject to both praise and condemnation for fansubs, the addition of unlicensed and unauthorized subtitled translations of anime series or films. Fansubs, which were originally distributed on VHS bootlegged cassettes in the 1980s,
 have been freely available and disseminated online since the 1990s. Fansubbers tend to adhere to an unwritten code to destroy or no longer distribute an anime once an official translated or subtitled version becomes licensed, although fansubs typically 
 continue to circulate through file sharing networks.<br><br>
Legal international availability of anime on the internet has changed in recent years, with simulcasts of series available on websites like Crunchyroll.</p>
   
  <h3 align="center"><a id="10">Awards</a></h3> 
   <p>The anime industry has several annual awards which honor the year's best works. Major annual awards in Japan include the Ōfuji Noburō Award, the Mainichi Film Award for Best Animation Film, the Animation Kobe Awards, the Japan Media Arts Festival 
   animation awards, the Tokyo Anime Award and the Japan Academy Prize for Animation of the Year. In the United States, anime films compete in the ICv2.com Anime Awards. There were also the American Anime Awards, which were designed to recognize excellence 
   in anime titles nominated by the industry, and were held only once in 2006. Anime productions are also nominated and win awards not exclusively for anime.</p>
   
  <h2 align="center"><a id="11">Influence on world culture</a></h2>
  <img src="./Images/220px-Akihabara_picture.jpg" align="right" style="margin-left: 9px">
   <p>Anime has become commercially profitable in Western countries, as demonstrated by early commercially successful Western adaptations of anime, such as Astro Boy. Since the 19th century, many Westerners have expressed a particular interest
   towards Japan and anime has dramatically exposed more Westerners to the culture of Japan.</p>
   
  <h3 align="center"><a id="12">Fan response</a></h3>
   <p>Anime clubs gave rise to anime conventions in the 1990s with the "anime boom", a period marked by increased popularity of anime. These conventions are dedicated to anime and manga and include elements like cosplay contests and industry talk panels.
   Cosplay, a portmanteau for "costume play", is not unique to anime and has become popular in contests and masquerades at anime conventions. Japanese culture and words have entered English usage through the popularity of the medium, including otaku, 
   a derogatory Japanese term commonly used in English to denote a fan of anime and manga. Anime enthusiasts have produced fan fiction and fan art, including computer wallpaper and anime music videos.</p>
   
  <h3 align="center"><a id="13">Anime style</a></h3>
 <p>As anime itself became increasingly popular, anime styling has been inevitably the subject of both satire and serious creative productions. South Park's "Chinpokomon" and "Good Times with Weapons" episodes, Adult Swim's Perfect Hair Forever, and 
 Nickelodeon's Kappa Mikey are examples of satirical depictions of Japanese culture and anime. Some works have sparked debate for blurring the lines between satire and serious "anime style" productions, such as the American anime style production Avatar:
 The Last Airbender. These anime styled works have become defined as anime-influenced animation, in an attempt to classify all anime styled works of non-Japanese origin. Some creators of these works cite anime as a source of inspiration and like the French 
 production team for Ōban Star-Racers moved to Tokyo to collaborate with a Japanese production team. When anime is defined as a "style" rather than as a national product it leaves open the possibility of anime being produced in other countries.
 A series dubbed as the "Middle East's First Anime Show" is currently in production, which is currently looking for funding. The web-based series RWBY is produced using an anime art style and has been declared to be anime. In addition, the series will be
 released in Japan, under the label of "anime" per the Japanese definition of the term and referenced as an "American-made anime". Defining anime as style has been contentious amongst fans, with John Oppliger stating, "The insistence on referring to original 
 American art as Japanese "anime" or "manga" robs the work of its cultural identity."</p>

</div>
</fieldset>


</div>
</body>
</html>