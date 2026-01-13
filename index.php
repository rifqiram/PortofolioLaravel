// Cari baris ini dan ubah (tambahkan /public)
if (file_exists($maintenance = __DIR__.'/public/storage/framework/maintenance.php')) {
    require $maintenance;
}

// Cari baris ini dan ubah (tambahkan /public)
require __DIR__.'/public/vendor/autoload.php';

// Cari baris ini dan ubah (tambahkan /public)
$app = require_once __DIR__.'/public/bootstrap/app.php';