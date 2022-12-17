        <?php

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.rajaongkir.com/starter/province",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "key: 9bcece8fde1cf2ffad116a0bf12055ee"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            $provinsi = json_decode($response, true);
        }
        ?>
        <div class="container-fluid">
            <div class="container">
                <div class="heading_container heading_center">
                    <h2>
                        Cek <span>Ongkos Kirim</span>
                    </h2>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <form method="post">
                            <h4>Alamat Pengirim</h3>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Provinsi Asal</label>
                                            <select class="form-control" id="provinsi" name="provinsi">
                                                <option>Pilih provinsi asal</option>
                                                <?php
                                                if ($provinsi['rajaongkir']['status']['code'] == '200') {
                                                    foreach ($provinsi['rajaongkir']['results'] as $prov) {
                                                        echo "<option value='$prov[province_id]' " . ($prov['province_id'] == $this->input->post('provinsi') ? "selected" : "") . ">$prov[province]</option>";
                                                    }
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Kota Asal</label>
                                            <select class="form-control" id="kota" name="kota">
                                                <?php
                                                if (count([$_POST])) {
                                                    $curl = curl_init();

                                                    curl_setopt_array($curl, array(
                                                        CURLOPT_URL => "https://api.rajaongkir.com/starter/city?&province=" . $this->input->post('provinsi'),
                                                        CURLOPT_RETURNTRANSFER => true,
                                                        CURLOPT_ENCODING => "",
                                                        CURLOPT_MAXREDIRS => 10,
                                                        CURLOPT_TIMEOUT => 30,
                                                        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                                                        CURLOPT_CUSTOMREQUEST => "GET",
                                                        CURLOPT_HTTPHEADER => array(
                                                            "key: 9bcece8fde1cf2ffad116a0bf12055ee"
                                                        ),
                                                    ));

                                                    $response = curl_exec($curl);
                                                    $err = curl_error($curl);

                                                    curl_close($curl);

                                                    if ($err) {
                                                        echo "cURL Error #:" . $err;
                                                    } else {
                                                        $kota = json_decode($response, true);
                                                        if ($kota['rajaongkir']['status']['code'] == '200') {
                                                            echo "<option value=''>Pilih kota</option>";
                                                            foreach ($kota['rajaongkir']['results'] as $kt) {
                                                                echo "<option value='$kt[city_id]' " . ($kt['city_id'] == $this->input->post('kota') ? "selected" : "") . ">$kt[city_name]</option>";
                                                            }
                                                        }
                                                    }
                                                } else {
                                                    echo "<option>Pilih provinsi dahulu</option>";
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <h4>Alamat Penerima</h3>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">Provinsi Penerima</label>
                                                <select class="form-control" id="provinsi_penerima" name="provinsi_penerima">
                                                    <option>Pilih provinsi penerima</option>
                                                    <?php
                                                    if ($provinsi['rajaongkir']['status']['code'] == '200') {
                                                        foreach ($provinsi['rajaongkir']['results'] as $prov) {
                                                            echo "<option value='$prov[province_id]' " . ($prov['province_id'] == $this->input->post('provinsi_penerima') ? "selected" : "") . ">$prov[province]</option>";
                                                        }
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">Kota Penerima</label>
                                                <select class="form-control" id="kota_penerima" name="kota_penerima">
                                                    <?php
                                                    if (count([$_POST])) {
                                                        $curl = curl_init();

                                                        curl_setopt_array($curl, array(
                                                            CURLOPT_URL => "https://api.rajaongkir.com/starter/city?&province=" . $this->input->post('provinsi_penerima'),
                                                            CURLOPT_RETURNTRANSFER => true,
                                                            CURLOPT_ENCODING => "",
                                                            CURLOPT_MAXREDIRS => 10,
                                                            CURLOPT_TIMEOUT => 30,
                                                            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                                                            CURLOPT_CUSTOMREQUEST => "GET",
                                                            CURLOPT_HTTPHEADER => array(
                                                                "key: 9bcece8fde1cf2ffad116a0bf12055ee"
                                                            ),
                                                        ));

                                                        $response = curl_exec($curl);
                                                        $err = curl_error($curl);

                                                        curl_close($curl);

                                                        if ($err) {
                                                            echo "cURL Error #:" . $err;
                                                        } else {
                                                            $kota = json_decode($response, true);
                                                            if ($kota['rajaongkir']['status']['code'] == '200') {
                                                                echo "<option value=''>Pilih kota</option>";
                                                                foreach ($kota['rajaongkir']['results'] as $kt) {
                                                                    echo "<option value='$kt[city_id]' " . ($kt['city_id'] == $this->input->post('kota_penerima') ? "selected" : "") . ">$kt[city_name]</option>";
                                                                }
                                                            }
                                                        }
                                                    } else {
                                                        echo "<option>Pilih provinsi dahulu</option>";
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">Jasa Pengiriman</label>
                                                <select class="form-control" id="jasa_pengirim" name="jasa_pengirim">
                                                    <option>Pilih jasa pengirim</option>
                                                    <?php
                                                    $jaspeng = ['jne' => 'JNE', 'pos' => 'POS', 'tiki' => 'TIKI'];
                                                    foreach ($jaspeng as $key => $value) {
                                                        echo "<option value='$key' " . ($key == $this->input->post('jasa_pengirim') ? "selected" : "") . ">$value</option>";
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Berat (gram)</label>
                                                <input type="number" class="form-control" name="berat" value="<?= $this->input->post('berat') ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary mb-2">Cek Ongkir</button>
                        </form>
                        <div class="card-deck">
                            <?php
                            $biaya = json_decode($ongkir, true);
                            if ($biaya['rajaongkir']['status']['code'] == '200') {
                                foreach ($biaya['rajaongkir']['results'][0]['costs'] as $by) {
                            ?>
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title"><?= $by['service'] ?></h5>
                                            <p class="card-text"><?= $by['description'] ?></p>
                                            <p class="card-text">Rp.<?= number_format($by['cost'][0]['value'], 0, ',', '.') ?></p>
                                            <p class="card-text"><small class="text-muted">Estimasi Pengiriman <?= $by['cost'][0]['etd'] ?> Hari</small></p>
                                        </div>
                                    </div>
                                    <br>
                            <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            document.getElementById('provinsi').addEventListener('change', function() {
                fetch("<?= base_url('ongkir/kota/') ?>" + this.value, {
                        method: 'GET',
                    })
                    .then((response) => response.text())
                    .then((data) => {
                        console.log(data)
                        document.getElementById('kota').innerHTML = data
                    })
            })
            document.getElementById('provinsi_penerima').addEventListener('change', function() {
                fetch("<?= base_url('ongkir/kota/') ?>" + this.value, {
                        method: 'GET',
                    })
                    .then((response) => response.text())
                    .then((data) => {
                        console.log(data)
                        document.getElementById('kota_penerima').innerHTML = data
                    })
            })
        </script>