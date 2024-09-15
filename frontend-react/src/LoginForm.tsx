import { useState } from 'react'
import { Card, CardContent, CardHeader, CardTitle } from "@/components/ui/card"
import React from 'react'

export default function LoginForm() {
  const [username, setUsername] = useState('')
  const [password, setPassword] = useState('')
  const [error, setError] = useState('')

  const handleSubmit = async (event: React.FormEvent) => {
    event.preventDefault()
    setError('')

    try {
      const response = await fetch('/php/iniciar_sesion.php', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: `login_usuario=${encodeURIComponent(username)}&login_clave=${encodeURIComponent(password)}`,
      })

      if (!response.ok) {
        throw new Error('Error en la respuesta del servidor')
      }

      const result = await response.json()

      if (result.error) {
        setError(result.error)
      } else {
        // Redirigir o actualizar el estado de la aplicación según sea necesario
        window.location.href = '/dashboard' // Ajusta esto según tu estructura de rutas
      }
    } catch (error) {
      setError('Error al iniciar sesión. Por favor, intente de nuevo.')
    }
  }

  return (
    <Card className="w-full max-w-md mx-auto">
      <CardHeader>
        <CardTitle className="text-center uppercase">Sistema de inventario</CardTitle>
      </CardHeader>
      <CardContent>
        <form onSubmit={handleSubmit} className="space-y-4">
          <div className="space-y-2">
            <Label htmlFor="username">Usuario</Label>
            <oninput
              id="username"
              type="text"
              value={username}
              onChange={(e) => setUsername(e.target.value)}
              pattern="[a-zA-Z0-9]{4,20}"
              maxLength={20}
              required
            />
          </div>
          <div className="space-y-2">
            <Label htmlFor="password">Clave</Label>
            <oninput
              id="password"
              type="password"
              value={password}
              onChange={(e) => setPassword(e.target.value)}
              pattern="[a-zA-Z0-9$@.-]{7,100}"
              maxLength={100}
              required
            />
          </div>
          {error && <p className="text-red-500 text-sm">{error}</p>}
          <Button type="submit" className="w-full">
            Iniciar sesión
          </Button>
        </form>
      </CardContent>
    </Card>
  )
}