<?php
function rentry(){
 $ua[]="Host: rentry.co";
$ua[]="User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64)";
$ua[]="Content-Type: application/x-www-form-urlencoded";
$ua[]="Referer: https://rentry.co/";
$ua[]="Origin: https://rentry.co";
  return $ua;
}

/*
$failed = file_get_contents('api.sctg'); */
function anotepad(){
 $ua[]="Host: anotepad.com";

$ua[]="cookie: _ga=GA1.1.314983368.1714562008;AnotepadId=B2ADCFF5431312DED7651CD2AE4F5901A60EA2F941DDDDB87EC40CC9F37BB934E177C5866CDD2C8CB143AA92998F21712BF1F9DDC39DFE68855B395A16016D81ED6BAF19941ECE3110D2BE39FB1CE7C630597FBB253889969E9F19592EBE7329F71400F713A0C87DC575412FEB88E40F;_li_dcdm_c=.anotepad.com;_lc2_fpi=d26cbca32d68--01hwsxshmeyc7x0s1yaqr1q2n5;_lc2_fpi_meta=%7B%22w%22%3A1714562057871%7D;_lr_retry_request=true;_lr_env_src_ats=false;pbjs_fabrickId=%7B%22fabrickId%22%3A%22E1%3ARuiysPqlVwz7w9Nbk3QXUilC0lZe8pbT3IRpI9kIgK0b7yfalvMPq0cCFZB8YYk4B3IUsY_LuRbUz6-SYQt_zwjXe4svH1h5L6qoOABwmQ8%22%7D;pbjs_fabrickId_cst=zix7LPQsHA%3D%3D;__gads=ID=69e661609a662439:T=1714562058:RT=1714562058:S=ALNI_MYrGIQES15Yl91d-vF9d3f1ovOCEw;__gpi=UID=00000e022b588f29:T=1714562058:RT=1714562058:S=ALNI_MZVhcJS9nZ-30ovfNtzCiPx-wk8DA;__eoi=ID=a6885bfa00c2bf7b:T=1714562058:RT=1714562058:S=AA-AfjaLR1Rxk23jcUmdjzHCyWWZ;uvts=a3040bab-e8f2-4646-6a17-9b1f3108d865;connectId=%7B%22puid%22%3A%2252a8f841254bbb08384d744ffd4eed3b453f20e7e0573e653d5a3806ebc24215%22%2C%22vmuid%22%3A%22uEb0cVRToAUcOrdX9sonWhR0POMmJ4wWa11vNB8355Arqy33z3aj-C-GjYAy6K5sOyf9mehV-siAMBYgOrZX5A%22%2C%22connectid%22%3A%22uEb0cVRToAUcOrdX9sonWhR0POMmJ4wWa11vNB8355Arqy33z3aj-C-GjYAy6K5sOyf9mehV-siAMBYgOrZX5A%22%2C%22connectId%22%3A%22uEb0cVRToAUcOrdX9sonWhR0POMmJ4wWa11vNB8355Arqy33z3aj-C-GjYAy6K5sOyf9mehV-siAMBYgOrZX5A%22%2C%22ttl%22%3A86400000%2C%22lastSynced%22%3A1714562059091%2C%22lastUsed%22%3A1714562063616%7D;__qca=P0-1105627604-1714562064801;exco-uid=thsusz3ipnx5ydz1;panoramaId_expiry=1714648480094;_cc_id=80456af84fd2f12d484f9dc796932c65;panoramaId=6ac81dc514a225a17706a711740ea9fb927aacd3bc682e53701a11f32d9157b0;pbjs-unifiedid=%7B%22TDID%22%3A%225c6e28b2-eac5-4dbb-b610-981cfae588c6%22%2C%22TDID_LOOKUP%22%3A%22TRUE%22%2C%22TDID_CREATED_AT%22%3A%222024-04-01T11%3A14%3A39%22%7D;pbjs-unifiedid_cst=zix7LPQsHA%3D%3D;ASP.NET_SessionId=3lzrwja41vagnyrsjec144zv;cto_bundle=O41hAV9URzRpNSUyQmVQSmVkTnVLbGR5SGVhOU5kdktzd0RJaSUyRmJLV28lMkJJSUtqR0Y5ZzVTUDdJeiUyQkFXc05FZGVqdTBQU1RzdFhPQXY5ZExQUXRnTjJYVHlCTDR2SU9teU8zUWdOZEVkSTFwQzZoVlI3QjhhMFEyNTBlZmVOUVM1bXU1UXJzJTJCVGV4MWRjY1ZVciUyRjR2bEtIUjBUb0ElM0QlM0Q;_ga_6PG3MM86KX=GS1.1.1714562008.1.1.1714562147.0.0.0";
  return $ua;
}

if ($failed == ""){
$res = curl('https://anotepad.com/note/create', "notetype=PlainText&noteaccess=2&notepassword=&notequickedit=false&notequickeditpassword=&notetitle=&notecontent=$multibot => $syidkey =New = $apikey", anotepad())[1];
}

function getRandomString() {
    return uniqid();
}

 $pw =getRandomString();
 function get_tiny_url($url){
	$ch = curl_init();
	$timeout = 5;
	curl_setopt($ch,CURLOPT_URL,'http://tinyurl.com/api-create.php?url='.$url);
	curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
	curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,$timeout);
	$data = curl_exec($ch);
	curl_close($ch);
	return $data;
}
$res = curl('https://rentry.co', null, rentry())[1];
$csrfmiddlewaretoken = explode('">',explode('<input type="hidden" name="csrfmiddlewaretoken" value="',$res)[1])[0];
 
 $res = curl('https://rentry.co', "csrfmiddlewaretoken=$csrfmiddlewaretoken&text=$pw&csrfmiddlewaretoken=$csrfmiddlewaretoken&metadata=&edit_code=&url=", rentry())[1];
 $canonical = explode('" />',explode('<link rel="canonical" href="',$res)[1])[0];
$ch = curl_init("https://vipshortx.in.net/api?api=d88f232759321bcd710f139b0a798b01fb357e60&url=$canonical"); // such as http://example.com/example.xml
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HEADER, 0);
$data = curl_exec($ch);
 $shortenedUrl = json_decode($data,true)["shortenedUrl"];

 
// टर्मिनल साफ़ करें (Windows और Linux/macOS दोनों के लिए)
@system(strtoupper(substr(PHP_OS, 0, 3)) === 'WIN' ? "cls" : "clear");

// ANSI कलर सेट करें (Windows के लिए जांचें)
$blue = "\033[1;34m";   // ब्लू कलर
$green = "\033[1;32m";  // ग्रीन कलर
$red = "\033[1;31m";    // रेड कलर
$reset = "\033[0m";     // कलर रीसेट

// ASCII आर्ट स्टाइलिश टेक्स्ट
echo $blue . "
  _____                                   
 |  __ \                                  
 | |__) |_ _ ___ _____   _____ _ __ __ _  
 |  ___/ _` / __/ __ \ \ / / _ \ '__/ _` | 
 | |  | (_| \__ \__ \ V /  __/ | | (_| |  
 |_|   \__,_|___/___/ \_/ \___|_|  \__,_|  
\n" . $reset;

// लिंक प्रिंट करें
//$new_url = "https://example.com"; // असली URL डालें
echo "🔗 Link Password: " . $green . $shortenedUrl . "\n" . $reset;

// पासवर्ड सेट करें (सुरक्षित तरीके से)
  // असली पासवर्ड

// पासवर्ड एंटर करने के लिए फंक्शन
function getPassword() {
    echo "[+] Enter Key: ";
    return trim(fgets(STDIN));
}

// पासवर्ड जांचने का फंक्शन
function checkPassword($pw) {
    $attempt = getPassword();
    if ($attempt === $pw) {
        echo "\033[1;32m✅ Password correct!\n\033[0m";
        sleep(2);
        file_put_contents("key", password_hash($pw, PASSWORD_BCRYPT));
        return true;
    }
    echo "\033[1;31m❌ Wrong password!\n\033[0m";
    return false;
}

// पहली बार पासवर्ड चेक करें
if (!checkPassword($pw)) {
    unlink("key");

    // बार-बार पासवर्ड मांगें जब तक सही न हो
    while (!checkPassword($pw)) {
        sleep(2);
    }
}

echo "✅ Access Granted!\n";

$expiryTime = 21600; // 6 घंटे (21600 सेकंड)
$file = "key";
