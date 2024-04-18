

console.log("hello")
const userName = document.getElementById("stuname");
const stucourse = document.getElementById("stucourse");


const submitBtn = document.getElementById("certificate");
const { PDFDocument, rgb, degrees } = PDFLib;


submitBtn.addEventListener("click", () => {
    const name = userName.value;
    const course = stucourse.value;
  
    generatePDF(name,course);
    
});

const generatePDF = async (name, course) => {
    const existingPdfBytes = await fetch("Certificate.pdf").then((res) =>
      res.arrayBuffer()
    );

    // Load a PDFDocument from the existing PDF bytes
    const pdfDoc = await PDFDocument.load(existingPdfBytes);
    pdfDoc.registerFontkit(fontkit);

    
  //get font
  const fontBytes = await fetch("Sanchez-Regular.ttf").then((res) =>
  res.arrayBuffer()
);
  // Embed our custom font in the document
  const SanChezFont  = await pdfDoc.embedFont(fontBytes);
   // Get the first page of the document
   const pages = pdfDoc.getPages();
   const firstPage = pages[0];
 
   // Draw a string of text diagonally across the first page
   firstPage.drawText(name, {
     x: 300,
     y: 270,
     size: 58,
     font: SanChezFont ,
     color: rgb(0.2, 0.84, 0.67),
   });

   firstPage.drawText(course, {
    x: 300,
    y: 170,
    size: 28,
    font: SanChezFont ,
    color: rgb(0.2, 0.84, 0.67),
  });
 
  // Serialize the PDFDocument to bytes (a Uint8Array)
  const pdfDataUri = await pdfDoc.saveAsBase64({ dataUri: true });
  saveAs(pdfDataUri,"certificate.pdf")
};

