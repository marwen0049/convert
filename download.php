<?php
if(isset($_POST['video-url'])) {
    $videoUrl = $_POST['video-url'];
    $outputFile = 'output.mp3';
    $command = "youtube-dl --extract-audio --audio-format mp3 -o '$outputFile' $videoUrl";
    exec($command, $output, $status);

    if ($status === 0) {
        // Send the file to the user for download
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="' . basename($outputFile) . '"');
        readfile($outputFile);

        // Delete the file after download
        unlink($outputFile);
        exit;
    } else {
        echo "Failed to convert video to MP3.";
    }
}
?>
