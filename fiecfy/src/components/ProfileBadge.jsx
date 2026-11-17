function ProfileBadge(){
    return (
        <div className="text-center flex flex-col items-center w-auto">
            <img className="rounded-full h-20" src="https://i.pravatar.cc/150" alt="Avatar"/>
            <h2 className="text-xl">Meu Perfil</h2>
            {/* <p>Esse é o meu Perfil</p> */}
        </div>
    );
}

export default ProfileBadge;