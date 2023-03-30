@startuml
left to right direction
actor "Usuário" as user
rectangle Site {
  usecase "Autenticar usuário" as UC1
  usecase "Comprar fichas" as UC2
  usecase "Selecionar jogo" as UC3
  usecase "Apostar" as UC4
  usecase "Gerenciar carteira" as UC5
  usecase "gerenciar jogos" as UC6
  usecase "Controlar usuário" as UC7
  
}

actor "Administrador" as admin

user --> UC1
user --> UC2
user --> UC3
user --> UC4
user --> UC5
admin --> UC6
admin --> UC7
@enduml