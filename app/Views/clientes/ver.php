
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dados do Cliente</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <a href="/clientes" class="btn btn-primary" style="margin-right: 20px;">Voltar</a>
              <li class="breadcrumb-item"><a href="/inicio">Inicio</a></li>
              <li class="breadcrumb-item"><a href="/clientes">Clientes</a></li>
              <li class="breadcrumb-item active">Dados do Cliente</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
      <div class="card">
        <div class="card-header">
            <h3 class="card-title">Dados Pessoais</h3>
        </div>
        <form action="/clientes/store" method="post">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nome</label>
                            <input type="text" class="form-control" value="<?= $cliente['nome'] ?>" disabled>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Data de Nascimento</label>
                            <input type="date" class="form-control" value="<?= $cliente['data_de_nascimento'] ?>" disabled>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Telefone</label>
                            <input type="text" class="form-control" value="<?= $cliente['telefone'] ?>" disabled>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Endereço</label>
                            <input type="text" class="form-control" value="<?= $cliente['endereco'] ?>" disabled>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Limite de Crédito</label>
                            <input type="text" class="form-control" value="<?= $cliente['limite_de_credito'] ?>" disabled>
                        </div>
                    </div>

                    <input type="hidden" name="id_cliente" value="<?= $cliente['id_cliente'] ?>">
                </div>
            </div>
              </form>
            </div>

        <!-- /.card-body -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->