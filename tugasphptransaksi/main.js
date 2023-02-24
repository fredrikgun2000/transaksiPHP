	function reset(){
		$('input').val('');
		$('#cmd').val('save');
	}

	$(document).on('click','#reset',function(){
		reset();
	})

	$(document).ready(function(){
		tampil_tabel();
		tampil_tabel1();
		tampil_tabel2();
		tampil_tabel3();
		tampil_tabel4();
		loadtabelpembelian();
		loadtabelpenjualan();
		$( '#tanggal1' ).datepicker({dateFormat: 'yy-mm-dd'}).val();
		$( '#tanggal2' ).datepicker({dateFormat: 'yy-mm-dd'}).val();
	})

//FORMBARANG
	$(document).on('submit','#saveformbarang',function(e){
	e.preventDefault();
	$.ajax({
		url:'crudtbbarang.php',
		method:'POST',
		data:new FormData(this),
		dataType:'JSON',
		contentType: false,
		cache: false,
		processData: false,
		success:function(data){
			tampil_tabel();
			reset();
		}
	})
})


	$(document).on('submit','#updateformbarang',function(e){
	e.preventDefault();
	$.ajax({
		url:'crudtbbarang.php',
		method:'POST',
		data:new FormData(this),
		dataType:'JSON',
		contentType: false,
		cache: false,
		processData: false,
		success:function(data){
			tampil_tabel();
			reset();
		}
	})
})

	
	$(document).on('click','.delete',function(){
			var kodebarang=$(this).attr('id');
			$.ajax({
				url:'crudtbbarang.php',
				data:'kodebarang='+kodebarang+'&cmd=delete',
				method:'POST',
				success:function(){
					tampil_tabel();
					reset();
				}
			})
		})	

	function tampil_tabel() {
		$.ajax({
			method:'GET',
			success:function(){
				$('#tabelbarang').load('tabelbarang.php');
			}
		})
	}


	function edit(kodebarang,nama,jenis,merk,satuan,jlh_stok,hargajual,hargabeli,ket) {
		document.getElementById('kodebarang').value=kodebarang;
		document.getElementById('nama').value=nama;
		document.getElementById('jenis').value=jenis;
		document.getElementById('merk').value=merk;
		document.getElementById('satuan').value=satuan;
		document.getElementById('jlh_stok').value=jlh_stok;
		document.getElementById('hargajual').value=hargajual;
		document.getElementById('hargabeli').value=hargabeli;
		document.getElementById('ket').value=ket;
		document.getElementById('cmd').value='Update';
		$('#saveformbarang').attr('id','updateformbarang');
	}

//FORMPELANGGAN
$(document).on('submit','#saveformpelanggan',function(e){
	e.preventDefault();
	$.ajax({
		url:'crudtbpelanggan.php',
		method:'POST',
		data:new FormData(this),
		dataType:'JSON',
		contentType: false,
		cache: false,
		processData: false,
		success:function(data){
			tampil_tabel1();
			reset();
		}
	})
})

$(document).on('submit','#updateformpelanggan',function(e){
	e.preventDefault();
	$.ajax({
		url:'crudtbpelanggan.php',
		method:'POST',
		data:new FormData(this),
		dataType:'JSON',
		contentType: false,
		cache: false,
		processData: false,
		success:function(data){
			tampil_tabel1();
			reset();
		}
	})
})

$(document).on('click','.delete',function(){
			var kodepel=$(this).attr('id');
			$.ajax({
				url:'crudtbpelanggan.php',
				data:'kodepel='+kodepel+'&cmd=delete',
				method:'POST',
				success:function(){
				tampil_tabel1();
				reset();
				}
			})
		})

function tampil_tabel1() {
		$.ajax({
			method:'GET',
			success:function(){
				$('#tabelpelanggan').load('tabelpelanggan.php');
			}
		})
	}

function edit1(kodepel,nama,alamat,telp) {
		document.getElementById('kodepel').value=kodepel;
		document.getElementById('nama').value=nama;
		document.getElementById('alamat').value=alamat;
		document.getElementById('telp').value=telp;
		document.getElementById('cmd').value='Update';
		$('#saveformpelanggan').attr('id','updateformpelanggan');
	}

//FORMSALES
$(document).on('submit','#saveformsales',function(e){
	e.preventDefault();
	$.ajax({
		url:'crudtbsales.php',
		method:'POST',
		data:new FormData(this),
		dataType:'JSON',
		contentType: false,
		cache: false,
		processData: false,
		success:function(data){
			tampil_tabel2();
			reset();
		}
	})
})

$(document).on('submit','#updateformsales',function(e){
	e.preventDefault();
	$.ajax({
		url:'crudtbsales.php',
		method:'POST',
		data:new FormData(this),
		dataType:'JSON',
		contentType: false,
		cache: false,
		processData: false,
		success:function(data){
			tampil_tabel2();
			reset();
		}
	})
})

$(document).on('click','.delete',function(){
			var kodesales=$(this).attr('id');
			$.ajax({
				url:'crudtbsales.php',
				data:'kodesales='+kodesales+'&cmd=delete',
				method:'POST',
				success:function(){
				tampil_tabel2();
				reset();
				}
			})
		})

function tampil_tabel2() {
		$.ajax({
			method:'GET',
			success:function(){
				$('#tabelsales').load('tabelsales.php');
			}
		})
	}

function edit2(kodesales,nama,alamat,telp) {
		document.getElementById('kodesales').value=kodesales;
		document.getElementById('nama').value=nama;
		document.getElementById('alamat').value=alamat;
		document.getElementById('telp').value=telp;
		document.getElementById('cmd').value='Update';
		$('#saveformsales').attr('id','updateformsales');
	}

//FORMUSER
$(document).on('submit','#saveformuser',function(e){
	e.preventDefault();
	$.ajax({
		url:'crudtbuser.php',
		method:'POST',
		data:new FormData(this),
		dataType:'JSON',
		contentType: false,
		cache: false,
		processData: false,
		success:function(data){
			tampil_tabel3();
			reset();
		}
	})
})

$(document).on('submit','#updateformuser',function(e){
	e.preventDefault();
	$.ajax({
		url:'crudtbuser.php',
		method:'POST',
		data:new FormData(this),
		dataType:'JSON',
		contentType: false,
		cache: false,
		processData: false,
		success:function(data){
			tampil_tabel3();
			reset();
		}
	})
})

$(document).on('click','.delete',function(){
			var kodeuser=$(this).attr('id');
			$.ajax({
				url:'crudtbuser.php',
				data:'kodeuser='+kodeuser+'&cmd=delete',
				method:'POST',
				success:function(){
				tampil_tabel3();
				reset();
				}
			})
		})

function tampil_tabel3() {
		$.ajax({
			method:'GET',
			success:function(){
				$('#tabeluser').load('tabeluser.php');
			}
		})
	}

function edit3(kodeuser,nama,status,pass,ket) {
		document.getElementById('kodeuser').value=kodeuser;
		document.getElementById('nama').value=nama;
		document.getElementById('status').value=status;
		document.getElementById('pass').value=pass;
		document.getElementById('ket').value=ket;
		document.getElementById('cmd').value='Update';
		$('#saveformuser').attr('id','updateformuser');
	}

//FORMSUPPLIER
$(document).on('submit','#saveformsupplier',function(e){
	e.preventDefault();
	$.ajax({
		url:'crudtbsupplier.php',
		method:'POST',
		data:new FormData(this),
		dataType:'JSON',
		contentType: false,
		cache: false,
		processData: false,
		success:function(data){
			tampil_tabel4();
			reset();
		}
	})
})

$(document).on('submit','#updateformsupplier',function(e){
	e.preventDefault();
	$.ajax({
		url:'crudtbsupplier.php',
		method:'POST',
		data:new FormData(this),
		dataType:'JSON',
		contentType: false,
		cache: false,
		processData: false,
		success:function(data){
			tampil_tabel4();
			reset();
		}
	})
})

$(document).on('click','.delete',function(){
			var kodesup=$(this).attr('id');
			$.ajax({
				url:'crudtbsupplier.php',
				data:'kodesup='+kodesup+'&cmd=delete',
				method:'POST',
				success:function(){
				tampil_tabel4();
				reset();
				}
			})
		})

function tampil_tabel4() {
		$.ajax({
			method:'GET',
			success:function(){
				$('#tabelsupplier').load('tabelsupplier.php');
			}
		})
	}

function edit4(kodesup,nama,alamat,telp) {
		document.getElementById('kodesup').value=kodesup;
		document.getElementById('nama').value=nama;
		document.getElementById('alamat').value=alamat;
		document.getElementById('telp').value=telp;
		document.getElementById('cmd').value='Update';
		$('#saveformsupplier').attr('id','updateformsupplier');
	}

//TRANSAKSI PEMBELIAN

$(document).on('change','.sup', function(){
	$('.alamat').removeClass('tampilalamat').addClass('d-none');
	$('.telp').removeClass('tampiltelp').addClass('d-none');
	var id = $(this).children(':selected').attr('id');
	$('#alamat'+id).removeClass('d-none').addClass('tampilalamat');
	$('#telp'+id).removeClass('d-none').addClass('tampiltelp');
})

$(document).on('change','.bar', function(){
	var id = $(this).children(':selected').attr('id');
	$('#kodebarangs').val('');
	$('#jenis').val('');
	$('#merk').val('');
	$('#satuan').val('');
	$('#qty').val('');
	$('#hargabeli').val('');
	$('#total').val('');
	var jenis = $('#jeniss'+id).val();
	var merk = $('#merks'+id).val();
	var satuan = $('#satuans'+id).val();
	var hargabeli = $('#hargabelis'+id).val();
	$('#jenis').val(jenis);
	$('#kodebarangs').val(id);
	$('#merk').val(merk);
	$('#satuan').val(satuan);
	$('#hargabeli').val(hargabeli);
})

$(document).on('keyup','#qty',function(){
	var qty = $('#qty').val();
	var hargabeli = $('#hargabeli').val(); 
	var rumus = qty * hargabeli;
	$('#totals').val(rumus);
})

$(document).on('click','#adds',function(){
	var kodebarang = $('#kodebarangs').val();
	var qty = $('#qty').val();
	var hargabeli = $('#hargabeli').val();
	var total = $('#totals').val();
	var cmd = $('#cmd').val();
	$.ajax({
		url:'crudtbtransaksipembelian.php',
		method:'POST',
		dataType: "json",
		data:'kodebarang='+kodebarang+'&jlh='+qty+'&harga='+hargabeli+'&total='+total+'&cmd='+cmd,
		success:function(data){
			console.log(data.status);
			loadtabelpembelian();
			resettransaksipembelian();
		}
	})
})

function loadtabelpembelian(){
	$.ajax({
		method: 'GET',
		success:function(){
			$('#tabeltransaksipembelian').load('tabeltransaksipembelian.php',
				function(){
					sub();
				});


		}
	})
}

$(document).on('click','.deletetransaksipembelian',function(){
			var kodebarang=$(this).attr('id');
			$.ajax({
				url:'crudtbtransaksipembelian.php',
				data:'kodebarang='+kodebarang+'&cmd=delete',
				method:'POST',
				success:function(){
					loadtabelpembelian();
				}
			})
		})	

function edittransaksipembelian(kodebarang,nama,jenis,merk,satuan,jlh,harga,total) {
		document.getElementById('kodebarangs').value=kodebarang;
		$('.bar').val(nama);
		document.getElementById('jenis').value=jenis;
		document.getElementById('merk').value=merk;
		document.getElementById('satuan').value=satuan;
		document.getElementById('qty').value=jlh;
		document.getElementById('hargabeli').value=harga;
		document.getElementById('total').value=total;
		document.getElementById('cmd').value='Update';
		document.getElementById('add').value='Update';
		$('#savetransaksipembelian').attr('id','updatetransaksipembelian');
	}

function resettransaksipembelian(){
	$('#kodebarangs').val('');
	$('.bar').val('Nama Barang');
	$('#cmd').val('Add');
	$('#add').val('Add');
	$('#jenis').val('');
	$('#merk').val('');
	$('#satuan').val('');
	$('#qty').val('');
	$('#hargabeli').val('');
	$('#total').val('');

}

function sub() {
	var s=0;
	$('.total').each(function(){
		var a=$(this).val();
		s +=parseInt(a);
	});
	$('#sub').val(s);
	grand();
}

$(document).on('keyup','#disc',function(){
	var disc = $(this).val();
	var sub = $('#sub').val();
	var rumus = sub*disc/100;
	$('#dis').html(rumus);
	grand();
})

$(document).on('keyup','#pajaks',function(){
	var pajak = $(this).val();
	var sub = $('#sub').val();
	var disc = $('#disc').val();
	var rumus = (sub-(sub*disc/100))*pajak/100;
	$('#pajak').html(rumus);
	grand();
})

function grand() {
	var sub = $('#sub').val();
	var pajak = $('#pajaks').val();
	var disc = $('#disc').val();
	var rumus = (sub-(sub*disc/100))+(sub-(sub*disc/100))*pajak/100;
	$('#grand').val(rumus);
}

$(document).on('click','#prosestransaksipembelian',function(){
	var kodesup=$('.sup').children(':selected').attr('id');
	var kodeuser=$('.user').children(':selected').attr('id');
	var subtotal=$('#sub').val();
	var disc=$('#disc').val();
	var pajak=$('#pajaks').val();
	if (pajak==''){
		pajak=0;
	}
	if (disc==''){
		disc=0;
	}
	var grandtotal=$('#grand').val();
	$.ajax({
		url:'prosestransaksipembelian.php',
		method:'POST',
		data: 'kodesup='+kodesup+'&kodeuser='+kodeuser+'&subtotal='+subtotal+'&disc='+disc+'&pajak='+pajak+'&grandtotal='+grandtotal,
		success:function(){
			location.reload();
		}
	})
})

//TRANSAKSI PENJUALAN
$(document).on('change','.pel', function(){
	$('.alamat').removeClass('tampilalamat').addClass('d-none');
	$('.telp').removeClass('tampiltelp').addClass('d-none');
	var id = $(this).children(':selected').attr('id');
	$('#alamat'+id).removeClass('d-none').addClass('tampilalamat');
	$('#telp'+id).removeClass('d-none').addClass('tampiltelp');
})

$(document).on('change','.bar', function(){
	var id = $(this).children(':selected').attr('id');
	$('#kodebarangs').val('');
	$('#jenis').val('');
	$('#merk').val('');
	$('#satuan').val('');
	$('#qty').val('');
	$('#hargajual').val('');
	$('#total').val('');
	var jenis = $('#jeniss'+id).val();
	var merk = $('#merks'+id).val();
	var satuan = $('#satuans'+id).val();
	var hargajual = $('#hargajuals'+id).val();
	$('#jenis').val(jenis);
	$('#kodebarangs').val(id);
	$('#merk').val(merk);
	$('#satuan').val(satuan);
	$('#hargajual').val(hargajual);
})

$(document).on('keyup','#qty',function(){
	var qty = $('#qty').val();
	var hargajual = $('#hargajual').val(); 
	var rumus = qty * hargajual;
	$('#total').val(rumus);
})

$(document).on('click','#add',function(){
	var kodebarang = $('#kodebarangs').val();
	var qty = $('#qty').val();
	var hargajual = $('#hargajual').val();
	var total = $('#total').val();
	var cmd = $('#cmd').val();
	$.ajax({
		url:'crudtbtransaksipenjualan.php',
		method:'POST',
		data:'kodebarang='+kodebarang+'&jlh='+qty+'&harga='+hargajual+'&total='+total+'&cmd='+cmd,
		success:function(data){
			alert(data);
			loadtabelpenjualan();
			resettransaksipenjualan();
		}
	})
})

function loadtabelpenjualan(){
	$.ajax({
		method: 'GET',
		success:function(){
			$('#tabeltransaksipenjualan').load('tabeltransaksipenjualan.php',
				function(){
					sub();
		})
	}})
}

$(document).on('click','.deletetransaksipenjualan',function(){
			var kodebarang=$(this).attr('id');
			$.ajax({
				url:'crudtbtransaksipenjualan.php',
				data:'kodebarang='+kodebarang+'&cmd=delete',
				method:'POST',
				success:function(){
					loadtabelpenjualan();
				}
			})
		})	

function edittransaksipenjualan(kodebarang,nama,jenis,merk,satuan,jlh,harga,total) {
		document.getElementById('kodebarangs').value=kodebarang;
		$('.bar').val(nama);
		document.getElementById('jenis').value=jenis;
		document.getElementById('merk').value=merk;
		document.getElementById('satuan').value=satuan;
		document.getElementById('qty').value=jlh;
		document.getElementById('hargajual').value=harga;
		document.getElementById('total').value=total;
		document.getElementById('cmd').value='Update';
		document.getElementById('add').value='Update';
		$('#savetransaksipenjualan').attr('id','updatetransaksipenjualan');
	}

function resettransaksipenjualan(){
	$('#kodebarangs').val('');
	$('.bar').val('Nama Barang');
	$('#cmd').val('Add');
	$('#add').val('Add');
	$('#jenis').val('');
	$('#merk').val('');
	$('#satuan').val('');
	$('#qty').val('');
	$('#hargajual').val('');
	$('#total').val('');
}

$(document).on('click','#prosestransaksipenjualan',function(){
	var kodepel=$('.pel').children(':selected').attr('id');
	var kodeuser=$('.user').children(':selected').attr('id');
	var kodesales=$('.sales').children(':selected').attr('id');
	var subtotal=$('#sub').val();
	var disc=$('#disc').val();
	var pajak=$('#pajaks').val();
	if (pajak==''){
		pajak=0;
	}
	if (disc==''){
		disc=0;
	}
	var grandtotal=$('#grand').val();
	$.ajax({		
		url:'prosestransaksipenjualan.php',
		method:'POST',
		data: 'kodepel='+kodepel+'&kodeuser='+kodeuser+'&kodesales='+kodesales+'&subtotal='+subtotal+'&disc='+disc+'&pajak='+pajak+'&grandtotal='+grandtotal,
		success:function(){
			location.reload();
		}
	})
})

$(document).on('click','#views',function(){
	var tanggal1=$( '#tanggal1' ).datepicker({dateFormat: 'yy-mm-dd'}).val();
	var tanggal2=$( '#tanggal2' ).datepicker({dateFormat: 'yy-mm-dd'}).val();
	var nobeli=$('#nobeli').val();
	var supplier=$('.suplaporanpembelian').children(':selected').attr('id');
	var user=$('.userlaporanpembelian').children(':selected').attr('id');
	$.ajax({
		url:'tabellaporanpembelian.php',
		method:'POST',
		data: 'tanggal1='+tanggal1+'&tanggal2='+tanggal2+'&nobeli='+nobeli+'&supplier='+supplier+'&user='+user,
		success:function(data){
			$('.data').remove();
			 $.each(data,function(i,item){
			 	console.log(data);
                $('#data').append('<tr class="data"><td id="tgl'+item.no+'">'+item.tgl+'</td><td id="nobeli'+item.no+'">'+item.no+'</td><td id="supplier'+item.no+'">'+item.supplier+'</td><td id="us'+item.no+'">'+item.user+'</td><td>'+item.namabarang+'</td><td>'+item.jlh+'</td><td>'+item.harga+'</td><td>'+item.total+'</td><td colspan="4"></td></tr><tr class="data" ><td colspan="8"></td><td>'+item.subtotal+'</td><td>'+item.disc+'</td><td>'+item.pajak+'</td><td>'+item.grandtotal+'</td><input type="hidden" class="apisubtotal" value="'+item.subtotal+'"><input type="hidden" class="apidisc" value="'+item.disc+'"><input type="hidden" class="apipajak" value="'+item.pajak+'"><input type="hidden" class="apigrandtotal" value="'+item.grandtotal+'"></tr><tr class="data"><td colspan="8"></td><td id="apisubtotal"></td><td id="apidisc"></td><td id="apipajak"></td><td id="apigrandtotal"></td></tr>')
            });
                table();
                table2();
                apisub();
                apidisc();
                apipajak();
                apigrandtotal();
		}
	})

})

function table() {
	$('[id]').each(function () {
	    $('[id="' + this.id + '"]:gt(0)').html('').css({"border": "none"});
	});
}

function table2() {
	var seen = {};
	$('tr').each(function() {
	    var txt = $(this).text();
	    $(" tr")
        .filter(function () { 
            return txt == $(this).text(); 
        })
        .not(":last")
        .remove();
	    });
}

function apisub() {
	var s=0;
	$('.apisubtotal').each(function(){
		var a=$(this).val();
		s +=parseInt(a);
	});
	$('#apisubtotal').html(s);
}
function apidisc() {
	var s=0;
	$('.apidisc').each(function(){
		var a=$(this).val();
		s +=parseInt(a);
	});
	$('#apidisc').html(s);
}

function apipajak() {
	var s=0;
	$('.apipajak').each(function(){
		var a=$(this).val();
		s +=parseInt(a);
	});
	$('#apipajak').html(s);
}

function apigrandtotal() {
	var s=0;
	$('.apigrandtotal').each(function(){
		var a=$(this).val();
		s +=parseInt(a);
	});
	$('#apigrandtotal').html(s);
}
// function loadtabellaporanpembelian(){
// 	$.ajax({
// 		method: 'GET',
// 		success:function(){
// 		}
// 	})
// }