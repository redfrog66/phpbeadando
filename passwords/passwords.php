<?php

function getFileBytes(string $path): array {
    $file = fopen($path, 'rb');
    $size = filesize($path);
    $content = fread($file, $size);
    fclose($file);
    $bytes = unpack(sprintf('C%d', $size), $content);
    $bytes = array_values($bytes);

    $lines = array();
    $line = array();

    foreach ($bytes as $byte) {
        if ($byte == 0x0A) {
            $lines[] = $line;
            $line = array();
        } else {
            $line[] = $byte;
        }
    }
    return $lines;
}

function decodeBytes(array $bytes): string {
    $key = [5, -14, 31, -9, 3];
    $keyIndex = 0;
    $decoded = '';
    foreach ($bytes as $byte) {
        $decoded .= chr($byte - $key[$keyIndex]);
        $keyIndex = ($keyIndex + 1) % count($key);
    }
    return $decoded;
}

function getUsers(): array {
    $rawLines = getFileBytes('password.txt');
    $users = array();
    foreach ($rawLines as $lineBytes) {
        $line = decodeBytes($lineBytes);
        $user = explode('*', $line);
        $users[$user[0]] = $user[1];
    }
    return $users;
}

?>
