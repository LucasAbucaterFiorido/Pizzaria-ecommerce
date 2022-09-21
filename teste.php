<div>
  <input type="file" name="arquivoimg" id="arquivoimg" accept="image/*">
</div>
<div>
  <br/>
  <img src="" alt="" id="preimg">

</div>
<br/>
<p id="output"></p>
<textarea name="" id="joaquim" cols="30" rows="10"></textarea>

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> -->
<script src="https://compressjs.herokuapp.com/compress.js"></script>
<script>

const compress = new Compress()
const preview = document.getElementById('preimg')
const output = document.getElementById('output')
const textoJoaquim = document.getElementById('joaquim')

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
    textoJoaquim.value = `${img.prefix}${img.data}`

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