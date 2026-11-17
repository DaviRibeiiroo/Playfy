import React from 'react'
import ProfileBadge from './ProfileBadge'
import { generos } from '../mockData'

const Header = () => {
  return (
    <header className='sticky top-0 z-10 bg-zinc-900/90 p- flex items-center justify-between'>
      <div className='flex gap-2 mt-2'>
        {generos.map(Genero => <span key={Genero} className='p-4 w-20 h-10  flex justify-center items-center border-2 border-solid border-white border-width rounded-3xl cursor-pointer'>{Genero}</span>)}
      </div>


      <div className="flex gap-2">
        {/* Botões de Navegação */}
        <button className='w-8 rounded-full bg-black/70 flex items-center justify-center text-zinc-400 cursor-not-allowed'>{'<'}</button>
        <button className='w-8 rounded-full bg-black/70 flex items-center justify-center text-zinc-400 cursor-not-allowed'>{'>'}</button>
      </div>

      <input type="text" className='bg-zinc-800 text-white rounded-full px-4 py-2'></input>

      <div className="flex gap-4 items-center">
        <ProfileBadge />
        {/* <button className='text-zinc-400 font-bold hover:text-white hover:scale-105 transition-all'>Inscrever-se</button>
        <button className='bg-white text-black font-bold px-6 py-2 rounded-full hover:scale-105 transition-transform'>Entrar</button> */}
      </div>
    </header>
  )
}

export default Header