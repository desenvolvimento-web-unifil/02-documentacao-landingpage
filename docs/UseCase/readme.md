```mermaid
flowchart LR

    User --- Registrar
    User --- Login
    User --- GerenciarCarteira
    User --- EscolherJogo
    User --- Apostar

    Gerente --> User
    Gerente ---- GerenciarJogos
```