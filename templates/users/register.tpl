{include file='common/header.tpl'}

{include file='publicity/slider.tpl'}

<div class="coluna" style="width: 70%;">
  <h2 style="text-align: center;">REGISTAR</h2>
  
  <form action="{$BASE_URL}actions/users/register.php" method="post" enctype="multipart/form-data">

  <table class="tabelaregisto">
          <tr>
            <td width="50%" colspan="2"><span class="field_error" style="color: red;">{$FIELD_ERRORS.top}</span></td><td width="25%"></td><td width="25%"></td>
          </tr>
          <tr>
            <td width="25%">Nome:*</td><td width="25%">Email:*</td><td width="50%" colspan="2">Fotografia:</td>
          </tr>
          <tr>
            <td width="25%" id="temcaixa">
              <input type="text" id="caixaregmaior" name="realname" value="{$FORM_VALUES.realname}"> 
              <span class="field_error" style="color: red;">{$FIELD_ERRORS.username}</span>
            </td>
            <td width="25%" id="temcaixa">
              <input type = "text" id="caixaregmaior" name = "regemail" value="{$FORM_VALUES.regemail}"></input>
              <span class="field_error" style="color: red;">{$FIELD_ERRORS.email}</span>
            </td>
            <td width="50%" id="temcaixa" colspan="2">
              <input type="file" name="photo">
            </td>
          </tr>
          <tr>
            <td width="25%">Username:*</td>
            <td width="25%">Telemóvel:</td>
            <td width="25%">Palavra-Chave:*</td>
            <td width="25%">Confirmar Palavra-Chave:*</td>
          </tr>
          <tr>
            <td width="25%" id="temcaixa">
              <input type="text" id="caixareg" name="username" value="{$FORM_VALUES.username}">
            </td>
            <td width="25%" id="temcaixa">
              <input type = "text" id="caixareg" name = "regtelemovel" value="{$FORM_VALUES.regtelemovel}"></input>
            </td>
            <td width="25%" id="temcaixa">
              <input type="password" id="caixareg" name="password" value="">
            </td>
            <td width="25%" id="temcaixa">
              <input type = "password" id="caixareg" name = "regpassword2" value=""></input>
            </td>
          </tr>
          <tr>
            <td width="50%"  colspan="2"><h4>Morada:</h4></td><td width="25%"></td><td width="25%"></td>
          </tr>
          <tr>
            <td width="50%"  colspan="2">Endereço:</td><td width="25%">Código Postal:</td><td width="25%">Cidade:</td>
          </tr>
          <tr>
            <td width="50%" id="temcaixa"  colspan="2">
              <input type = "text" id="caixaregmaior" name = "regendereco1" value="{$FORM_VALUES.regendereco1}"></input>
            </td>
            <td width="25%" id="temcaixa">
              <input type = "text" id="caixareg" name = "regcodpostal" value="{$FORM_VALUES.regcodpostal}"></input>
            </td>
            <td width="25%" id="temcaixa">
              <input type = "text" id="caixareg" name = "regcidade" value="{$FORM_VALUES.regcidade}"></input>
            </td>
          </tr>
          <tr>
            <td width="50%"  colspan="2"></td><td width="25%">Região:</td><td width="25%">País:</td>
          </tr>
          <tr>
            <td width="50%" id="temcaixa"  colspan="2">
              <input type = "text" id="caixaregmaior" name = "regendereco2" value="{$FORM_VALUES.regendereco2}"></input>
            </td>
            <td width="25%" id="temcaixa">
              <input type = "text" id="caixareg" name = "regregiao" value="{$FORM_VALUES.regregiao}"></input>
            </td>
            <td width="25%" id="temcaixa">
              <input type = "text" id="caixareg" name = "regpais" value="{$FORM_VALUES.regpais}"></input>
            </td>
          </tr>
          <tr>
            <td width="50%"  colspan="2"><span class="error"><?php echo $MsgErro;?></span></td><td width="25%"></td><td width="25%"><button type = "submit" name="cmdsubmit" value="">Registar</button><button type = "reset" name="cmdreset" value="">Limpar Dados</button></td>
          </tr>
                
        </table>
      </form>
  <!-- <form action="{$BASE_URL}actions/users/register.php" method="post" enctype="multipart/form-data">
    <label>Name:<br> 
      <input type="text" name="realname" value="{$FORM_VALUES.realname}"> 
      <span class="field_error">{$FIELD_ERRORS.username}</span>
    </label>
    <br>
    <label>Username:<br> 
      <input type="text" name="username" value="{$FORM_VALUES.username}">
    </label>
    <br>
    <label>Password:<br> 
      <input type="password" name="password" value="">
    </label>
    <br>
    <label>Photo:<br>
      <input type="file" name="photo">
    </label>
    <input type="submit" value="Register">
  </form> -->

</div>

{include file='common/footer.tpl'}
