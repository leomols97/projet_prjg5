describe('Home Page Test', () => {
    it('Visits Home Page', () => {
      cy.visit('localhost:8000')
      cy.contains('Connexion')
    })
})

describe('Conexion Test', () => {
    it('Connexion', () => {
        cy.visit('localhost:8000')
        cy.get('input[name*="myuser_id"]').type("admin")
        cy.get('input[name*="pass_word"]').type("admin")
        cy.get('button').click()
        cy.contains("Page d'Administrateur")
    })
})

describe('Conexion Invalid User Test', () => {
    it('Connexion Invalid User', () => {
        cy.visit('localhost:8000')
        cy.get('input[name*="myuser_id"]').type("admin1997")
        cy.get('input[name*="pass_word"]').type("admin1997")
        cy.get('button').click()
        cy.contains("Erreur")
        cy.contains("Utilisateur Inexistent! Vueillez contacter un administrateur!")
    })
})

describe('Conexion Invalid Password', () => {
    it('Connexion Invalid Password', () => {
        cy.visit('localhost:8000')
        cy.get('input[name*="myuser_id"]').type("admin")
        cy.get('input[name*="pass_word"]').type("admin1997")
        cy.get('button').click()
        cy.contains("Erreur")
        cy.contains("Mot de Passe Invalid! Vueillez contacter un administrateur!")
    })
})
