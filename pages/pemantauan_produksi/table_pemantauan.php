 
                <thead>
					<tr>
						<th>Tanggal Produksi</th>
						<th>ID Order Produk</th>
						<th>Status Produksi</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$queryspl = mysqli_query ($konek, "SELECT * FROM monitoring_produksi");
						if($queryspl == false){
							die ("Terjadi Kesalahan : ". mysqli_error($konek));
						}

						while ($spl = mysqli_fetch_array ($queryspl)){

							echo "
								<tr>
									<td>$spl[tanggal_produksi]</td>
									<td>$spl[id_order_produk]</td>
									<td>$spl[status_produksi]</td>
									<td>
										<a href='index.php?id_monitoring_produksi=$spl[id_monitoring_produksi]'><button type='button' class='btn bg-pink btn-circle-table waves-effect waves-circle waves-float';><i class='material-icons'>create</i></button></a>
										<a href='../controller/komposisi_produk/delete.php?id_monitoring_produksi=$spl[id_monitoring_produksi]' class='delete-link'><button type='button' class='btn bg-red btn-circle-table waves-effect waves-circle waves-float'><i class='material-icons'>delete</i></button></a>
									</td>
								</tr>";
						}
					?>
				</tbody>
                            </table>