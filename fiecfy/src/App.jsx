import Sidebar from './components/Sidebar.jsx';
import Player from './components/Player.jsx';
import Header from './components/Header.jsx';
import PlaylistCard from './components/PlaylistCard.jsx';
import ProfileBadge from './components/ProfileBadge.jsx';
import PlaylistGrid from './components/PlaylistGrid.jsx';
import {playListData, generos } from './mockData.js';
// import Modal from './components/Teste.jsx';

function App() {
  return (
    <>
      <div className="h-screen bg-black text-white flex flex-col">
        {/* os componentes serão chamados abaixo */}
        <div className='flex flex-1 overflow-hidden'>
          <Sidebar />
          <main className='flex-1 bg-zinc-900 rounded-lg m-2 p-2 overflow-y-auto'>
            <Header />
            
            
            <h2 className='text-2xl font-bold mb-6'>Boa tarde</h2>
            <p className='text-zinc-400'>Seus álbuns serão exibidos aqui!</p>

            {/*Container para os cards*/}
            <div className='flex flex-wrap  gap-6'>
              {playListData.filter(playlist => playlist.type === 'podcast').map(playlist => <PlaylistCard key={playlist.id} description={playlist.description}title={playlist.title}imgURL={playlist.coverUrl}/>)}
            </div>

            
            

          </main>
        </div>
        <Player />
      </div>


    </>
  );
}

export default App;