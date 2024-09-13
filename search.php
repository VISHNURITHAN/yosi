

<?php
$searchItem = $_GET['term'];
$target_url = 'https://test1internal.yosicare.com/onboard/AjaxContents/get_practice.php?term=' . urlencode($searchItem); 

$ch = curl_init(); 
curl_setopt($ch, CURLOPT_URL, $target_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
$response = curl_exec($ch); 
if (curl_errno($ch)) {
    echo json_encode(['error' => curl_error($ch)]);
} else {
    header('Content-Type: application/json');
    echo json_encode($response); 
}
curl_close($ch);
?>
