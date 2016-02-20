<?php
class Model {
  private $db;

  public function __construct() {
    // Menggunakan koneksi yang sudah dibuat sebelumnya
    $this->db = Config::$DB;
  }

  /* Berguna untuk mengeksekusi `select` SQL query dan mengambil semua baris yang dikembalikan
  @param string $sql SQL script
  @return array kumpulan baris dari sebuah tabel.
  */
  public function select($sql) {
    // Eksekusi sql script
    $result = $this->db->query($sql);

    $rows = array();
    $temp = null;
    // Mengambil semua baris
    while($temp = $result->fetch_assoc())
      $rows[] = $temp;

    return $rows;
  }
}
?>
