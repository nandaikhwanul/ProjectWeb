const pdfInput = document.getElementById('pdf-input');
const uploadBtn = document.getElementById('upload-btn');
const pdfPreview = document.getElementById('pdf-preview');

uploadBtn.addEventListener('click', (e) => {
	e.preventDefault();
	const file = pdfInput.files[0];
	const reader = new FileReader();
	reader.onload = () => {
		const pdfData = reader.result;
		const pdfDoc = new PDFDocument();
		pdfDoc.load(pdfData);
		const pdfPages = pdfDoc.getPageCount();
		for (let i = 0; i < pdfPages; i++) {
			const page = pdfDoc.getPage(i + 1);
			const canvas = document.createElement('canvas');
			canvas.width = page.getWidth() * 2;
			canvas.height = page.getHeight() * 2;
			const context = canvas.getContext('2d');
			page.render(context);
			const imgData = canvas.toDataURL('image/png');
			const img = document.createElement('img');
			img.src = imgData;
			pdfPreview.appendChild(img);
		}
	};
	reader.readAsArrayBuffer(file);
});