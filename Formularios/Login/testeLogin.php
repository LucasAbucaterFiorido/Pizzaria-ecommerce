<form action="cadastrar_usuario-login.php" method="post">
    <input type="text" id="txtcargo" name="selectcargo" value="Comum" disabled> 
    <input type="text" id="txtstatus" name="selectsts" value="Ativo" disabled>

    <br>
    <label for="txtnome">Nome</label>
    <br>
    <input type="text" id="txtnome" name="txtnome">
    <br>
    <label for="txtlogin">Login</label>
    <br>
    <input type="text" id="txtlogin" name="txtlogin">
    <br>
    <label for="txtsenha">senha</label>
    <br>
    <input type="text" id="txtsenha" name="txtsenha">
    <br>
    <label for="txtdesc">Descrição</label>
    <br>
    <input type="text" id="txtdesc" name="txtdesc">
    <br>
    <label for="txtobs">obs</label>
    <br>
    <input type="text" id="txtobs" name="txtobs">
    <br>
    <label for="arquivoimg">Imagem de Perfil</label>
    <br>
    <input type="file" id="arquivoimg" name="arquivoimg" onchange="previewImg(this)">   
    <br>
    <label for="txtbase64">base64</label>
    <br>
    <textarea name="txtbase64" id="txtbase64" cols="30" rows="10"></textarea>  
    <br><br> 
    <button type="submit">Enviar</button>
</form>
<div id="output"></div>

<script src="../../js/bootstrap.bundle.js"></script>
<script src="../../js/jquery-3.6.1.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://compressjs.herokuapp.com/compress.js"></script>
<script>
    const compress = new Compress()
    const preview = document.getElementById('preImg')
    const output = document.getElementById('output')
    const txtbase64 = document.getElementById('base64Code')

    const upload = document.getElementById('arquivoimg')

    upload.addEventListener('change', (evt) => {
    const files = [...evt.target.files]
    compress.compress(files, {
        size: 4, // the max size in MB, defaults to 2MB
        quality: 0.75, // the quality of the image, max is 1,
        maxWidth: 1920, // the max width of the output image, defaults to 1920px
        maxHeight: 1920, // the max height of the output image, defaults to 1920px
        resize: true // defaults to true, set false if you do not want to resize the image width and height
    }).then((images) => {

        const img = images[0]
        // returns an array of compressed images
        preview.src = `${img.prefix}${img.data}`
        txtbase64.value = `${img.prefix}${img.data}`

        const {
        endSizeInMb,
        initialSizeInMb,
        iterations,
        sizeReducedInPercent,
        elapsedTimeInSeconds,
        alt
        } = img

        output.innerHTML = `<b>Start Size:</b> ${initialSizeInMb} MB <br/><b>End Size:</b> ${endSizeInMb} MB <br/><b>Compression Cycles:</b> ${iterations} <br/><b>Size Reduced:</b> ${sizeReducedInPercent} % <br/><b>File Name:</b> ${alt}`
    })
    }, false)
</script>
