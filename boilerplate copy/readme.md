

SFTP for VS code -
 
VScode extenstion: https://github.com/lukasz-wronski/vscode-ftp-sync

example json: 


{
    "remotePath": "/public_html/test/wp-content/themes/onqor/",
    "host": "160.153.246.65",
    "username": "onqorserver",
    "password": "the password for the server here",
    "port": 21,
    "secure": false,
    "protocol": "ftp",
    "uploadOnSave": true,
    "passive": false,
    "debug": true,
    "privateKeyPath": null,
    "passphrase": null,
    "agent": null,
    "allow": [],
    "ignore": [
        "\\.vscode",
        "\\.git",
        "\\.DS_Store"
    ],
    "generatedFiles": {
        "extensionsToInclude": [
            ".css", ".js"
        ],
        "path": "/dist"
    }
}
