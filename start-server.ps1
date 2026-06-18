param(
    [string]$HostName = "127.0.0.1",
    [int]$Port = 8000
)

$projectRoot = Split-Path -Parent $MyInvocation.MyCommand.Path
$publicDir = Join-Path $projectRoot "public"

if (-not (Test-Path $publicDir)) {
    Write-Error "Le dossier public est introuvable : $publicDir"
    exit 1
}

$phpCommand = Get-Command php -ErrorAction SilentlyContinue

if (-not $phpCommand) {
    Write-Error "PHP n'est pas disponible dans le PATH."
    exit 1
}

Write-Host "Demarrage du serveur web sur http://${HostName}:$Port" -ForegroundColor Cyan
Write-Host "Racine du projet : $projectRoot" -ForegroundColor DarkGray
Write-Host "Arret : Ctrl+C" -ForegroundColor DarkGray

Set-Location $projectRoot
& $phpCommand.Source -S "${HostName}:$Port" -t $publicDir
