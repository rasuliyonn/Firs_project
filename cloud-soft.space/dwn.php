$dir = '/www/cloud-soft.space/file/';

$file_id = $_GET['file'] ?? null;

if (file_exists($file = $dir . $file_id) {
    
header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($file).'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    readfile($file);
    exit;
} else {
die('файла нет');
}
