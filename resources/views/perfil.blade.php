@extends('templates.template')
@section('conteudo')
<div class="container bootstrap snippet"  style="background-color: white; padding-top: 20px; margin-bottom: 40px; margin-top: 60px;">
    <div class="row">
        <div class="col-sm-2"><a href="/users" class="pull-right"><img title="profile image" class="img-circle img-responsive" src="http://i64.tinypic.com/10r93ww.png" height="100" width="100"></a></div>
        <div class="col-sm-10"><font face="magneto" size="10">Fainor</font>
        <br>
            Rua João Avelange, 1097 - Manejo - Resende / Rio de Janeiro (RJ)
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            {{-- form pra upload de img da conta --}}
            <form action="upload.php" method="post" enctype="multipart/form-data">
                <div class="text-center">
                    <div class="text-center">
                        <img src="http://www.fainor.com.br/v2/wp-content/uploads/2018/05/BRAS%C3%83O_OKOKOK.png" class="avatar img-circle img-thumbnail" height="200" width="200" alt="avatar"><br><br>
                        <input type="file" name="fileToUpload" id="fileToUpload">
                        <input type="submit" value="Upload Image" name="submit">
                    </div>
                </div>
            </form>
            <form>
                <div class="col-sm-12" >
                    <div class="tab-content" ><hr>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Responsável</label>
                                <input type="email" class="form-control" id="inputEmail4" placeholder="Nome Completo">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Alterar Password</label>
                                <input type="password" class="form-control" id="inputPassword4" placeholder="********">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="inputCity">República</label>
                                <input type="text" class="form-control" id="inputCity">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputState">Vagas</label>
                                <select id="inputState" class="form-control">
                                    <option selected>Selecione</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputState">Membros</label>
                                <select id="inputState" class="form-control">
                                    <option selected>Selecione</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputState">Gênero</label>
                                <select id="inputState" class="form-control">
                                    <option selected>Selecione</option>
                                    <option>Masculina</option>
                                    <option>Feminina</option>
                                    <option>Mista</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputCity">Rua</label>
                                <input type="text" class="form-control" id="inputCity">
                            </div>
                            <div class="form-group col-md-5">
                                <label for="inputZip">Bairro</label>
                                <input type="text" class="form-control" id="inputZip">
                            </div>
                            <div class="form-group col-md-1">
                                <label for="inputZip">Nº</label>
                                <input type="text" class="form-control" id="inputZip">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputCity">Cidade</label>
                                <input type="text" class="form-control" id="inputCity">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputState">Estado</label>
                                <select id="inputState" class="form-control">
                                    <option selected>Selecione</option>
                                    <option>Acre (AC)</option>
                                    <option>Alagoas (AL)</option>
                                    <option>Amapá (AP)</option>
                                    <option>Amazonas (AM)</option>
                                    <option>Bahia (BA)</option>
                                    <option>Ceará (CE)</option>
                                    <option>Distrito Federal (DF)</option>
                                    <option>Espírito Santo (ES)</option>
                                    <option>Goiás (GO)</option>
                                    <option>Maranhão (MA)</option>
                                    <option>Mato Grosso (MT)</option>
                                    <option>Mato Grosso do Sul (MS)</option>
                                    <option>Minas Gerais (MG)</option>
                                    <option>Pará (PA)</option>
                                    <option>Paraíba (PB)</option>
                                    <option>Paraná (PR)</option>
                                    <option>Pernambuco (PE)</option>
                                    <option>Piauí (PI)</option>
                                    <option>Rio de Janeiro (RJ)</option>
                                    <option>Rio Grande do Norte (RN)</option>
                                    <option>Rio Grande do Sul (RS)</option>
                                    <option>Rondônia (RO)</option>
                                    <option>Roraima (RR)</option>
                                    <option>Santa Catarina (SC)</option>
                                    <option>São Paulo (SP)</option>
                                    <option>Sergipe (SE)</option>
                                    <option>Tocantins (TO)</option>
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputZip">Cep</label>
                                <input type="text" class="form-control" id="inputZip">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                <label class="form-check-label" for="gridCheck">
                                    Check me out
                                </label>
                            </div>
                        </div>
                        <div style="margin-bottom: 10px">
                            <button type="submit" class="btn btn-success">Salvar</button>
                            <button  type="submit" class="btn btn-primary" class="btn btn-lg" type="reset">Limpar</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
