// Script untuk mengatur waktu lirik lagu
const lyrics = [
    { id: 'line-1', time: 0 },
    { id: 'line-2', time: 5 },
    { id: 'line-3', time: 10 },
    { id: 'line-4', time: 15 },
    { id: 'line-5', time: 20 },
    { id: 'line-6', time: 25 },
    { id: 'line-7', time: 30 },
    { id: 'line-8', time: 35 },
    { id: 'timestamp-1', time: 51 },
    { id: 'line-9', time: 51 },
    { id: 'line-10', time: 55 },
    { id: 'line-11', time: 60 },
    { id: 'line-12', time: 65 },
    { id: 'timestamp-2', time: 68 },
    { id: 'line-13', time: 68 },
    { id: 'line-14', time: 72 },
    { id: 'line-15', time: 75 },
    { id: 'line-16', time: 78 },
    { id: 'line-17', time: 81 },
    { id: 'line-18', time: 84 },
    { id: 'line-19', time: 87 },
    { id: 'timestamp-3', time: 101 },
    { id: 'line-20', time: 101 },
    { id: 'line-21', time: 104 },
    { id: 'line-22', time: 107 },
    { id: 'line-23', time: 110 },
    { id: 'timestamp-4', time: 127 },
    { id: 'line-24', time: 127 },
    { id: 'line-25', time: 130 },
    { id: 'line-26', time: 135 },
    { id: 'timestamp-5', time: 144 },
    { id: 'line-27', time: 144 },
    { id: 'line-28', time: 148 },
    { id: 'line-29', time: 152 },
    { id: 'line-30', time: 156 },
    { id: 'line-31', time: 160 },
    { id: 'line-32', time: 163 },
    { id: 'line-33', time: 167 },
    { id: 'timestamp-6', time: 153 },
    { id: 'line-34', time: 170 },
    { id: 'line-35', time: 175 },
    { id: 'line-36', time: 180 },
    { id: 'line-37', time: 185 },
    { id: 'timestamp-7', time: 190 },
    { id: 'line-38', time: 190 },
    { id: 'line-39', time: 195 },
    { id: 'line-40', time: 200 },
    { id: 'line-41', time: 204 },
    { id: 'line-42', time: 208 },
    { id: 'line-43', time: 211 },
    { id: 'line-44', time: 214 },
    { id: 'timestamp-8', time: 225 },
    { id: 'line-45', time: 225 },
    { id: 'line-46', time: 229 },
    { id: 'line-47', time: 235 },
    { id: 'line-48', time: 240 },
    { id: 'line-49', time: 245 },
    { id: 'line-50', time: 250 },
    { id: 'line-51', time: 255 },
];

// Function untuk memunculkan lirik sesuai waktu dan menambahkan efek kuning pada baris aktif
let lastTimestamp = 0;
function displayLyrics() {
    const currentTime = Math.floor(Date.now() / 1000);

    for (let lyric of lyrics) {
        const lyricElement = document.getElementById(lyric.id);

        // Jika waktu sudah mencapai waktu lirik dan elemen belum diberi kelas 'visible'
        if (currentTime >= lyric.time && !lyricElement.classList.contains('visible')) {
            lyricElement.classList.add('visible');
            // Memberikan kelas 'active' pada lirik yang sedang aktif
            lyricElement.classList.add('active');
        } else if (currentTime < lyric.time && lyricElement.classList.contains('visible')) {
            lyricElement.classList.remove('active');
        }
    }

    requestAnimationFrame(displayLyrics);
}

displayLyrics();
