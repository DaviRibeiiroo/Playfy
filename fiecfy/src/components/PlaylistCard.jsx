function PlaylistCard({title, description, imgURL}){
    return (
        <div className="w-80 text-center flex flex-col items-center bg-slate-800/40 p-2 rounded-md border-white border-2 border-solid">
            <img className="rounded-md" src={imgURL || "https://upload.wikimedia.org/wikipedia/pt/a/ad/Baby_Single.jpg"} alt="Baby" />
            <h1 className="font-semibold text-xl text-balance">{title}</h1>
            <p className="descricao">{description}</p>
        </div>
    );
}

export default PlaylistCard;