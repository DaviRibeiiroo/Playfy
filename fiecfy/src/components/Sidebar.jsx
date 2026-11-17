import { HiMiniHome } from "react-icons/hi2";
import { IoIosSearch } from "react-icons/io";
import { PiMusicNotes } from "react-icons/pi";


const menuItems = [
  {
    id: "1",
    label: "Inicio",
    iconClass: <HiMiniHome size={25} />
  },
  {
    id: "2",
    label: "Buscar",
    iconClass: <IoIosSearch size={25} />
  },
  {
    id: "3",
    label: "Sua Biblioteca",
    iconClass: <PiMusicNotes size={25} /> 
  }
];


function Sidebar(){
  return (
    <aside className="w-16 md:w-72 bg-black p-3 md:p-6 flex flex-col gap-6 transition-all duration-300">
      <nav className="flex flex-col gap-4">
        {menuItems.filter(Sid => Sid.id != 3).map(menu => <a href="#" className="flex items-center justify-center md:justify-start gap-4 text-zinc-400 hover:text-white transition-colors font-semibold" key={menu.id} label={menu.label}iconClass={menu.iconClass}>{menu.iconClass}{menu.label}</a>)}
      </nav>
      <div className="w-full h-px bg-zinc-800"></div>
      <nav>
        {menuItems.filter(Sid => Sid.id == 3).map(menu => <a href="#" className="flex items-center justify-center md:justify-start gap-4 text-zinc-400 hover:text-white transition-colors font-semibold" key={menu.id} label={menu.label}iconClass={menu.iconClass}>{menu.iconClass}{menu.label}</a>)}
      </nav>
    </aside>
  );
}

export default Sidebar;