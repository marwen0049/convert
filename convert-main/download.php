<?php
if(isset($_POST['video-url'])) {
    $videoUrl = $_POST['video-url'];
    $format = $_POST['format'];
    $resolution = $_POST['resolution'];

    // Build the command based on format and resolution
    $outputFile = 'output.' . $format;
    $command = "youtube-dl --extract-audio --audio-format mp3";
    
    if ($format === 'mp4') {
        $command .= " --recode-video $resolution";
    }

    $command .= " -o '$outputFile' $videoUrl";

    // Execute the command
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
        echo "Failed to convert video.";
    }
}
?>
