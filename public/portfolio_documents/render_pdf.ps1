$html = "file:///C:/Users/matth/Herd/viajecarrental/public/portfolio_documents/taiwan_top_travel_compliant.html"
$pdf = "C:\Users\matth\Herd\viajecarrental\public\portfolio_documents\Taiwan_Top_Travel_Fiverr_Compliant_Case_Study.pdf"
$desktopPdf = "C:\Users\matth\OneDrive\Desktop\Taiwan_Top_Travel_Fiverr_Compliant_Case_Study.pdf"

$args = @(
    "--headless=new",
    "--no-sandbox",
    "--disable-gpu",
    "--no-pdf-header-footer",
    "--print-to-pdf=$pdf",
    "$html"
)

Start-Process -FilePath "C:\Program Files\Google\Chrome\Application\chrome.exe" -ArgumentList $args -Wait
Copy-Item -Path $pdf -Destination $desktopPdf -Force

Write-Output "Source PDF Exists: $(Test-Path $pdf)"
Write-Output "Desktop PDF Exists: $(Test-Path $desktopPdf)"
