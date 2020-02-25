<section class="content">
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Data Siswa</h1>
                </div>
            </div>
        </div>
    </div>
    	<div class="container-fluid">
            <a type="button" href="<?php echo base_url('Teacher/Sign_Up') ?>" class="btn fa fa-2x fa-plus" valign="right"></a>
    		<div class="row">
    			<div class="col-lg-12">
    				<table id="tableStudent" class="display datatable table table-hover">
    					<thead class="bg-dark">
    						<tr>
    							<th class="text-center" width="5%">No</th>
    							<th class="text-center">Status</th>
    							<th class="text-center">Nama Siswa</th>
    							<th class="text-center">Kelas</th>
    							<th class="text-center">E-mail</th>
    							<th class="text-center">Created</th>
    							<th class="text-center">Update</th>
    							<th class="text-center">Action</th>
    						</tr>
    					</thead>
    					<tbody class="bg-light">
                            <?php $no = 1; if (!empty($data)): ?>
                                <?php foreach ($data as $key): ?>
                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $key['status']?></td>
                                    <td><?php echo $key['nama']?></td>
                                    <td><?php echo $key['kelas']?></td>
                                    <td><?php echo $key['email']?></td>
                                    <td class="text-center"><?php echo $key['created_date']?></td>
                                    <td class="text-center"><?php echo ($key['last_update']=='0000-00-00 00:00:00')? '-': $key['last_update']?></td>
                                    <td class="text-center">
                                        <button value="<?php echo $key['id'] ?>" class="btn-primary btn-sm mdlDetailStudent"><i class="fa fa-edit"></i></button>
                                        <button id="mdlDeleteStudent" value="<?php echo $key['id'] ?>" class="btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            <?php endif; ?>
    					</tbody>
    				</table>
    			</div>
    		</div>
    	</div>
</div>
</section>
<div class="modal fade" id="modal_account" tabindex="-1" role="dialog" aria-labelledby="Help" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-dark text-center">
                <h5 class="modal-title">Detail Akun</h5>
                <button type="button" class="close hover" data-dismiss="modal" style="color: white;">&times;</button>
            </div>
            <div class="modal-body">
                <center>
                    <input class="form-control col-lg-12" type="text" id="TC_id" hidden/><br />
                    <div class="row">
                        <label class="col-lg-3" for="TC_name">Nama :</label>
                        <div class="col-lg-8">
                            <input class="form-control col-lg-12" type="text" id="TC_name"/><br />
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-lg-3" for="TC_username">Username :</label>
                        <div class="col-lg-8">
                            <input class="form-control col-lg-12" type="text" id="TC_username"/><br />
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-lg-3" for="TC_pwd">Password :</label>
                        <div class="col-lg-8">
                            <input class="form-control col-lg-12" type="text" id="TC_pwd"/><br />
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-lg-3" for="TC_status">Status :</label>
                        <div class="col-lg-8">
                            <input class="form-control col-lg-12" type="text" id="TC_status"/><br />
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-lg-3" for="TC_Kelas">Kelas :</label>
                        <div class="col-lg-8">
                            <input class="form-control col-lg-12" type="text" id="TC_Kelas"/><br />
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-lg-3" for="TC_email">Email :</label>
                        <div class="col-lg-8">
                            <input class="form-control col-lg-12" type="text" id="TC_email"/><br />
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-lg-3" for="TC_Create">Created Date:</label>
                        <div class="col-lg-8">
                            <input class="form-control col-lg-12" type="text" id="TC_Create"/><br />
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-lg-3" for="TC_LastDate">Last Update:</label>
                        <div class="col-lg-8">
                            <input class="form-control col-lg-12" type="text" id="TC_LastDate"/><br />
                        </div>
                    </div>
                </center>
            </div>
            <div class="modal-footer">
                <button class="btn-primary btn-sm" id="TC_UpdateAkun"><i class="fa fa-paper-plane"></i>&nbsp;Update</button>
            </div>
        </div>
    </div>
</div>
