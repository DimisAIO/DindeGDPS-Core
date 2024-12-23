<?php
$installed = false; // DON'T CHANGE IT! It changes automatically

$gdps = "DindeGDPS"; // Used to title and download
$lrEnabled = 1; // 1 = Level reupload enabled, 0 = disabled
$msgEnabled = 1; // 1 = Messenger enabled, 0 = disabled
$clansEnabled = 1; // 1 = Clans enabled, 0 = disabled
$songEnabled = 12; // 0 = Song reupload disabled, add 1 to enable song file reupload, add 2 to enable song link reupload
$sfxEnabled = 12; // 0 = SFX upload disabled, 1 = enabled
$convertEnabled = 1; // 1 = Convert SFX to OGG enabled, 0 = disabled
$songSize = 10; // Max song size in megabytes
$sfxSize = 4.5; // Max SFX size in megabytes
$timeType = 0; // How time will show in-game, 0 - default Cvolton time, 1 - Dashboard-like time, 2 - RobTop-like time
$dashboardIcon = '/database/dashboard/icon.png'; // Icon at the top left of dashboard, can be link
$dashboardFavicon = '/database/dashboard/icon.png'; // Icon in browser's tab, can be link
$preenableSongs = true; // true = songs are enabled when reuploading, false = song must be enabled through dashboard/stats/disabledSongsList.php in order to use it
$preenableSFXs = true; // true = SFXs are enabled when reuploading, false = SFX must be enabled through dashboard/stats/disabledSFXsList.php in order to use it
// If you changed dashboard's place, change $dbPath in dashboard/incl/dashboardLib.php

// External download links, disables when you have gdpsName.gdpsFileType in dashboard/download directory

$pc = 'https://cdn-dinde.141412.xyz/DindeGDPS.exe';
$mac = 'https://dgdps.us.to/dl';
$android = 'https://dl.dindegmdps.us.to/mobile';
$ios = 'itms-services://?action=download-manifest&url=https://files.141412.xyz/r/DindeGDPS.plist';

// Launcher executable names (like "launcher.exe"), place them to dashboard/download folder

$pcLauncher = "";
$macLauncher = "";
$androidLauncher = "";
$iosLauncher = "";

// Footer socials settings, leave empty to disable

$vk = ''; // Link to your VK page
$discord = 'https://discord.gg/7vAb3TQhwt'; // Like https://discord.gg/*discord invite*
$twitter = 'https://twitter.com/dimisaio'; // I don't have twitter
$youtube = 'https://youtube.com/@dindegdps'; // Like https://youtube.com/channel/*your channel id* or https://youtube.com/c/*your channel name*
$twitch = ''; // Link to your Twitch channel

// Third-party resourses, fill it if you use something (mods, textures, etc). Syntax of this thing is: array('AVATAR', 'USERNAME', 'SOCIAL OF THIS USER', 'What this person did (optionally)');

$thirdParty[] = array('https://yt3.googleusercontent.com/EZ149IVvU5JX2Fi6yH7R95NQmKdNsea_gggEvJXA0MIZQ397E_WHLLNCgBjL45npnMZNUkpq=s88-c-k-c0x00ffffff-no-rj', 'RobTop', 'https://store.steampowered.com/app/322170/Geometry_Dash/', 'For Geometry Dash');
$thirdParty[] = array('https://avatars.githubusercontent.com/u/5721187', 'Cvolton', 'https://github.com/Cvolton', 'For GDPS code');
$thirdParty[] = array('https://avatars.githubusercontent.com/u/52624723', 'Foxodever', 'https://github.com/foxodever/BetterCvoltonGDPS/blob/main/tools/songs/upload.php', 'For file upload script');
$thirdParty[] = array('https://yt3.googleusercontent.com/hGTFjuSL6f14qmMstqEFRolnLlZ2qnPCIJkDeQYtaygZhz1E_WKLJ_dF6LIdeejEM04e-OSQbmI=s160-c-k-c0x00ffffff-no-rj', 'Rare', 'https://www.youtube.com/@Rareized', 'DindeGDPS 2.2 Menuloop');
$thirdParty[] = array('https://yt3.googleusercontent.com/7IpSdKLVXfzi0OVntkjWoQg92ZLWegUhILV6n7Kvm2a8_FS1uwfVxV1GEM9CT7uZC5rJR4dxpTA=s160-c-k-c0x00ffffff-no-rj', 'Juora', 'https://www.youtube.com/@Juora', 'DindeGDPS 1.9 Menuloop');
$thirdParty[] = array('https://yt3.googleusercontent.com/ytc/AIdro_nr0sgOYrPFIeuwYcw-lErI-_zY4_z2GkB9GRm2TqzxL0k=s160-c-k-c0x00ffffff-no-rj', 'Tetsugaku', 'https://www.youtube.com/@Tetsugaku', 'DindeGDPS 2.2 Pauseloop');
$thirdParty[] = array('https://yt3.googleusercontent.com/UefHUoIok7EhEKIjjMtXiiYOe6OI20aR-AGZaSkan3Wp3n6DifWwFMcxQ0KAobMNsEIww7DJfbQ=s160-c-k-c0x00ffffff-no-rj', 'DMDOKURO', 'https://www.youtube.com/@DMDOKURO', 'DindeGDPS Secret Menuloop');

// SFX/Music libraries, syntax is: array(ID (must be unique), LIBRARY NAME, LIBRARY LINK (not to .dat file), LIBRARY TYPE (0 = only SFX, 1 = only music, 2 = both));
// Template: $customLibrary[] = array(1, '', '', 2); 

$customLibrary[] = array(1, 'Geometry Dash', 'https://geometrydashfiles.b-cdn.net', 2); 
$customLibrary[] = array(2, 'GDPSFH', 'https://sfx.fhgdps.com', 0); 
$customLibrary[] = array(3, $gdps, null, 2); // Your GDPS's library, don't remove it
$customLibrary[] = array(4, 'Song File Hub', 'https://api.songfilehub.com', 1);

// SFX converter API links, make one by using code from https://github.com/MegaSa1nt/GDPS-ConvertSFX
// Template: $convertSFXAPI[] = "";

$convertSFXAPI[] = "https://niko.gcs.icu";
$convertSFXAPI[] = "https://lamb.gcs.icu";
$convertSFXAPI[] = "https://omori.gcs.icu"; // You're welcome
$convertSFXAPI[] = "https://im.gcs.icu";
$convertSFXAPI[] = "https://hat.gcs.icu";
$convertSFXAPI[] = "https://converter.m336.dev";

/*
	Level reupload tool
	
	These confing will allow you to customize level reupload tool
	
	$requireAccountForReuploading — if user must enter their account credentials to reupload level
		True — require logging in
		False — don't require to login
	$disallowReuploadingNotUserLevels — if user should be allowed to reupload only their levels
		True — allow reuploading only their levels
		False — allow reuploading any levels
*/

$requireAccountForReuploading = true;
$disallowReuploadingNotUserLevels = true;

/*
	Cobalt API
	
	Use Cobalt API to be able to reupload songs with YouTube links and etc.
	Requires file upload to be enabled!
	
	$useCobalt — Should server use Cobalt to reupload songs by links
		True — use Cobalt
		False — don't use Cobalt

	$cobaltAPI[] — links to Cobalt's APIs
		Server will randomly pick one of Cobalt APIs when reuploading song
		
	Turnstile-protected APIs are currently not supported, sorry
*/

$useCobalt = true;
$cobaltAPI[] = 'https://cobalt.gcs.icu';
?>
